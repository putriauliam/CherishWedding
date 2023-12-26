<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Category;
use App\Models\City;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
// use Log;

class DashboardCategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.vendor-post.index', [
            
            "vendor" => Vendor::latest()->filter(request(['search', 'category', 'city']))->paginate(10)->withQueryString(),
            'categories' => Category::all(),
            'cities' => City::all(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.vendor-post.create', [
            'categories' => Category::all(),
            'cities' => City::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:vendors',
            'category_id' => 'required',
            'city_id' => 'required',
            'price' => 'required',
            'address' => 'required',
            'koordinat_maps' => 'required',
            'detail' => 'required',
            'telp' => 'required',
            'email' => 'required',
            'instagram' => 'required',
            'image' => 'image|file|max:2048|required',
            'profil' => 'image|file|max:2048',
        ]);

        // dd($validatedData);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image');
        }
        if ($request->file('profil')) {
            $validatedData['profil'] = $request->file('profil')->store('image');
        }

        // $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Vendor::create($validatedData);

        return redirect('/dataVendor')->with('success', 'New post has been added!');
        // try {
        //     $validatedData = $request->validate([
        //         'name' => 'required|max:255',
        //         'slug' => 'required|unique:vendors',
        //         'category_id' => 'required',
        //         'city_id' => 'required',
        //         'price' => 'required',
        //         'address' => 'required',
        //         'koordinat_maps' => 'required',
        //         'detail' => 'required',
        //         'telp' => 'required',
        //         'email' => 'required',
        //         'instagram' => 'required',
        //         'image' => 'image|file|max:2048',
        //         'profil' => 'image|file|max:2048',
        //     ]);
    
        //     if ($request->file('image')) {
        //         $validatedData['image'] = $request->file('image')->store('image');
        //     }
        //     if ($request->file('profil')) {
        //         $validatedData['profil'] = $request->file('profil')->store('image');
        //     }
    
        //     Vendor::create($validatedData);
    
        //     return redirect('/dataVendor')->with('success', 'New post has been added!');
        // } catch (QueryException $e) {
        //     // Tangkap kesalahan QueryException
        //     Log::error('Error creating vendor: ' . $e->getMessage());
    
        //     // Redirect kembali ke halaman sebelumnya dengan pesan error
        //     return redirect('/dataVendor')->with('fail', 'Failed to add new post. Please try again.');
        // } catch (\Exception $e) {
        //     Log::error('Kesalahan tak terduga saat membuat vendor: ' . $e->getMessage());

        //     // Tampilkan pesan pengecualian untuk debugging
        //     dd($e->getMessage());

        //     return redirect('/dataVendor')->with('fail', 'Kesalahan tak terduga terjadi. Silakan coba lagi.');
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(Vendor $vendor)
    {
        return view('dashboard.vendor-post.show',[
            'vendor' => $vendor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendor $vendor, $id)
    {
        $vendor = Vendor::find($id);

        if ($vendor->image) {
            Storage::delete($vendor->image);
        }
        $vendor->delete();
        return back()->with('success', 'Data Vendor berhasil dihapus');
        
    }

    public function checkSlug(Request $request)
    {

        $slug = SlugService::createSlug(Vendor::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
