<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        // $userId = auth()->id();
        // $vendor = Vendor::find($id);
        // $ids = DB::table('favorites')->where('user_id', $userId)->select('vendor_id')->pluck('vendor_id');

        // Dapatkan ID pengguna yang sudah terautentikasi
        $userId = Auth::id();
        $user = Auth::user();
        // Temukan vendor dengan ID yang diberikan
        $vendor = Vendor::find($id);

        // Dapatkan ID vendor yang difavoritkan oleh pengguna yang sudah terautentikasi
        $favoriteVendorIds = DB::table('favorites')->where('user_id', $userId)->pluck('vendor_id');

        // Ambil data vendor yang difavoritkan
        $favoriteVendors = Vendor::whereIn('id', $favoriteVendorIds)->get();

        // Kirimkan data ke view
        return view('profil', [
            'vendor' => $vendor,
            'favoriteVendors' => $favoriteVendors,
            'title' => 'profil user',
            'active' => 'profil',
            'user' => $user
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
    public function destroy(string $id)
    {
        //
    }
}
