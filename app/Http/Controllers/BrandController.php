<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    // Get all brands
    public function index()
    {
        return response()->json(Brand::all(),200);
    }

    // Get a single brand
    public function show($id)
    {
        return Brand::findOrFail($id);
    }

    // Create a new brand
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'brand_name' => 'required|string|max:255',
            'brand_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

       // Gestion de l'upload de l'image
        if ($request->hasFile('brand_image')) {
            $imagePath = $request->file('brand_image')->store('brand_images', 'public');
        }

        // Création de la nouvelle marque
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_image = $imagePath;  // Enregistrer le chemin de l'image
        $brand->rating = $request->rating;
        $brand->save();

        return response()->json($brand, 201);
    }

    // Update an existing brand
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'brand_name' => 'required|string|max:255',
            'brand_image' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $brand = Brand::findOrFail($id);
        $brand->brand_name = $request->brand_name;
        $brand->brand_image = $request->brand_image;
        $brand->rating = $request->rating;
        $brand->save();

        return response()->json($brand, 200);
    }

    // Delete a brand
    public function destroy($id)
    {
        Brand::destroy($id);

        return response()->json(['message'=>'deleted'], 200);
    }

}
