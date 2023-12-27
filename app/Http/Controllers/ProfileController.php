<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vendor;
use App\Models\Category;
use App\Models\City;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return view('profil', [
            'title' => 'profil user',
            'active' => 'profil',
            'user' => $user
        ]);
    }

    public function getUser(User $user)
    {
        $user = Auth::user();
        return $user;
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vendor $vendor, $id)
    {

        // Dapatkan ID pengguna yang sudah terautentikasi
        $userId = Auth::id();
        $user = Auth::user();
        // Temukan vendor dengan ID yang diberikan
        $vendor = Vendor::find($id);

        // Dapatkan ID vendor yang difavoritkan oleh pengguna yang sudah terautentikasi
        $favoriteVendorIds = DB::table('favorites')->where('user_id', $userId)->pluck('vendor_id');

        // Ambil data vendor yang difavoritkan
        $favoriteVendors = Vendor::whereIn('id', $favoriteVendorIds)->latest()->filter(request(['search', 'category', 'city']))->paginate(10)->withQueryString();
        

        // Kirimkan data ke view
        return view('profil', [
            'vendor' => $vendor,
            "categories" => Category::all(),
            "cities" => City::all(),
            'favoriteVendors' => $favoriteVendors,
            'title' => 'profil user',
            'active' => 'profil',
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profil $profil)
    {
        return view('profil', [
            'profil' => $profil
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        try {
            $user = Auth::user();
            $rules = [
                'image' => 'image|file|max:10240|required'
            ];
        
            $validatedData = $request->validate($rules);
        
            if ($request->file('image')) {
                if ($request->oldImage) {
                    Storage::delete($request->oldImage);
                }
                $validatedData['image'] = $request->file('image')->store('image');
            }
        
            $validatedData['password'] = auth()->user()->id;
        
            User::where('id', $user->id)->update($validatedData);
        
            return redirect('/profil')->with('success', 'Profile has been updated');
        } catch (ValidationException $e) {
            // Tangkap kesalahan validasi dan kembalikan dengan pesan kesalahan
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Tangkap kesalahan lainnya dan cetak pesan kesalahan
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
