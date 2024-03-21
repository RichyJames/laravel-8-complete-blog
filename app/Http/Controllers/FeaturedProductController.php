<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeaturedProduct; 

class FeaturedProductController extends Controller
{
    
    public function index()
    {
        $featuredProducts = FeaturedProduct::all(); 
        return view('featured', compact('featuredProducts')); 
    }
   
   

    public function show($id)
    {
        $featuredProduct = FeaturedProduct::findOrFail($id);
        return view('show', compact('featuredProduct'));
    }

  
    public function edit($id)
    {
        $featuredProduct = FeaturedProduct::findOrFail($id);
        return view('edit', compact('featuredProduct'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);
    
        $featuredProduct = FeaturedProduct::findOrFail($id);
        $featuredProduct->update($validatedData);
    
        return redirect()->route('featured');
    }

    public function destroy($id)
    {
        
        $featuredProduct = FeaturedProduct::findOrFail($id);
        $featuredProduct->delete();


        return redirect()->route('featured');
    }
}
