<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Category;
use App\Models\City;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Title;

// use Log;

class DashboardCategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.vendor-post.index', [
            "title" => "DATA VENDOR",
            "active" => "data vendor",
            // "vendor" => Vendor::latest()->filter(request(['search', 'category', 'city']))->paginate(10)->withQueryString(),
            // 'categories' => Category::all(),
            // 'cities' => City::all(),

        ]);

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.vendor-post.create', [
            'title' => "TAMBAH DATA VENDOR",
            "active" => "data vendor",
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
            'email' => 'required|unique:vendors',
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

        return redirect('/dataVendor')->with('success', 'vendor berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vendor $vendor)
    {
        return view('dashboard.vendor-post.show',[
            "title" => "DETAIL DATA VENDOR",
            "active" => "data vendor",
            'vendor' => $vendor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendor $vendor)
    {
        return view('dashboard.vendor-post.edit', [
            "title" => "EDIT DATA VENDOR",
            "active" => "data vendor",
            'vendor' => $vendor,
            'categories' => Category::all(),
            'cities' => City::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vendor $vendor)
    {

        $rules = [
            'name' => 'required|max:255',
            'category_id' => 'required',
            'city_id' => 'required',
            'price' => 'required',
            'address' => 'required',
            'koordinat_maps' => 'required',
            'detail' => 'required',
            'telp' => 'required',
            'email' => 'required',
            'instagram' => 'required',
            'image' => 'image|file|max:2048',
            'profil' => 'image|file|max:2048',
        ];

        if ($request->slug != $vendor->slug) {
            $rules['slug'] = 'required|unique:vendors';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('image');
        }

        if ($request->file('profil')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['profil'] = $request->file('profil')->store('image');
        }

        // $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Vendor::where('id', $vendor->id)
            ->update($validatedData);

        return redirect('/dataVendor')->with('success', 'Vendor berhasil di update!');
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

    public function search(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $vendor = Vendor::where('name', 'like', '%'.$request->search_string.'%')
            ->orWhere('detail', 'like', '%'.$request->search_string.'%')
            ->orderBy('id','desc')
            ->paginate(10);
        } else {
            $vendor = DB::table('vendors')
                ->orderBy('id', 'desc')
                ->get();
        }

        if ($vendor->count() >= 1) {
            
            
                $vendor =  Vendor::latest()->filter(request(['search', 'category', 'city']))->paginate(10)->withQueryString();
                // $categories = Category::all(),
                // 'cities' => City::all(),
                foreach($vendor as $row)
                {
                    $output .= '
                    <tr>
                    <td>'.$row->name.'</td>
                    <td>'.$row->image.'</td>
                    <td>'.$row->city->name.'</td>
                    <td>'.$row->category->name.'</td>
                    <td>'.$row->price.'</td>
                    </tr>
                    ';
                }
    
        }else{
            return response()->json([
                'status' => 'nothing_found',
            ]);
        }
        $vendor = array(
            'table_data'  => $output,
        );
        echo json_encode($vendor);
        
    }

}
