<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Http\Requests\StoreFavoriteRequest;
use App\Http\Requests\UpdateFavoriteRequest;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
    public function store(Request $request)
    {
        $user = auth()->user()->id;
        $ada = Favorite::where('user_id', $user)->where('vendor_id', $request->vendor_id)->first();

        
        if ($ada) {
            return back()->with('fail', 'Vendor sudah ada dalam daftar favorit');
        } else {
            Favorite::create([
                'user_id' => $user,
                'vendor_id' => $request->vendor_id,
            ]);

            return back()->with('success', 'Ditambahkan ke daftar favorit');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $user = auth()->user()->id;
        $ada = Favorite::where('user_id', $user)->where('vendor_id', $request->vendor_id)->first();


        if ($ada) {
            $ada->delete();
            return back()->with('success', 'berhasil dihapus dari daftar favorit');
        } else {
            return back()->with('fail', 'vendor tidak ada dalam daftar favorit');
        }
    }
}
