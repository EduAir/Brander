<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    // Get all brands
    public function index(Request $request)
    {
        $country = $request->header('CF-IPCountry', 'default');

        if($country=='default'){

            return response()->json(Brand::inRandomOrder()->get(),200);
        }else{

            $brands = Country::where('code', $country)
                        ->with('brand')
                        ->get()
                        ->pluck('brand')  // Recovers brands only
                        ->filter()        // Filters out null elements
                        ->sortByDesc('rating') // Sort by "rating" descending order
                        ->values();       // Reindex the collection

            return response()->json($brands,200);
        }
        
    }

    public function welcome()
    {
        $page_title = 'Welcome';
        return view('welcome', compact('page_title'));
    }

    // Get a single brand
    public function show($id)
    {
        return Brand::findOrFail($id);
    }

    // add country
    public function addcountrybrand(Request $request)
    {
       $validator = Validator::make($request->all(), [
            'country_code' => 'required|string|max:5',
            'brand_id' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        
        if(Country::where('code',$request->country_code)->where('brand_id',$request->brand_id)->exists()){

            return response()->json(['message'=>'This brand has been already set to this country'], 422);
        }else{

            $this_insertion = Country::create([
                'code'=>$request->country_code,
                'brand_id'=>$request->brand_id
            ]);

            return response()->json(['message'=>'inserted','id'=>$this_insertion->id], 201);
        }

       
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
