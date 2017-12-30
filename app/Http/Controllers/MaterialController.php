<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Beesperester
use Beesperester\Material\Material;

class MaterialController extends Controller
{
    public function show(Request $request, string $name)
    {
        $material = Material::fromName($name, env('SALT', ''));

        return view('material.show', ['material' => $material]);
    }

    public function showApi(Request $request, string $name)
    {
        $material = Material::fromName($name, env('SALT', ''));

        $preview = [
            'preview' => url('material/'.$name),
        ];

        return array_merge($material->toArray(), $preview);
    }
}
