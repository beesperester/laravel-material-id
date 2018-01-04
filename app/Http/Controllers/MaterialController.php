<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Beesperester
use Beesperester\Material\Material;

class MaterialController extends Controller
{
    /**
     * Welcome view with example materials.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function welcome(Request $request)
    {
        $material_names = [
            'metal',
            'glass',
            'paper',
            'wood',
        ];

        asort($material_names);

        $materials = array_map(
            function ($name) {
                return Material::fromName($name, env('SALT', ''));
            },
            $material_names
        );

        return view('welcome', ['materials' => $materials]);
    }

    /**
     * Show material id for requested name.
     *
     * @param Illuminate\Http\Request $request
     * @param string                  $name
     *
     * @return Response
     */
    public function show(Request $request, string $name)
    {
        $material = Material::fromName($name, env('SALT', ''));

        return view('material.show', ['material' => $material]);
    }

    /**
     * Show material id for requested name.
     *
     * @param Illuminate\Http\Request $request
     * @param string                  $name
     *
     * @return json
     */
    public function showApi(Request $request, string $name)
    {
        $material = Material::fromName($name, env('SALT', ''));

        $preview = [
            'preview' => url('material/'.$name),
        ];

        return array_merge($material->toArray(), $preview);
    }

    /**
     * Show material id for requested name.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Redirect
     */
    public function store(Request $request)
    {
        $name = $request->input('name');

        return redirect()->route('material_show', $name);
    }
}
