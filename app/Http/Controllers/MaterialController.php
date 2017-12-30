<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Models
use App\Material;

class MaterialController extends Controller
{
    public function index(Request $request)
    {
        $materials = Material::all();

        return view('material.index', ['materials' => $materials]);
    }

    public function show(Request $request, Material $material)
    {
        return $material;
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'name' => 'required|unique:materials',
        ]);

        $material = Material::create($validated_data);

        return redirect()->back();
    }

    public function destroy(Request $request, Material $material)
    {
        $material->delete();

        return redirect()->back();
    }
}
