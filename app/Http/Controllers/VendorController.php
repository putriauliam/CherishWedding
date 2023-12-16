<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\Category;
use App\Models\City;
use App\Http\Requests\StorevendorRequest;
use App\Http\Requests\UpdatevendorRequest;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $title = '';
        // if(request('category')) {
        //     $category = Category::firstWhere('slug', request('category'));
        //     $title = ' in ' . $category->name;
        // }

        // if(request('city')) {
        //     $city = City::firstWhere('name', request('city'));
        //     $title = ' by ' . $city->name;
        // }
        return view('vendor', [
            "title" => "Vendor" . $title,
            "active" => "vendor",
            "categories" => Category::all(),
            "cities" => City::all(),
            "vendor" => Vendor::latest()->filter(request(['search', 'category', 'city']))->paginate(10)
        ]);

    }

    public function rekomendasi()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorevendorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(vendor $vendor)
    {
        return view('detailVendor', [
            "title" => "Detail",
            "active" => "vendor",
            "vendor" => $vendor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatevendorRequest $request, vendor $vendor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vendor $vendor)
    {
        //
    }
}
