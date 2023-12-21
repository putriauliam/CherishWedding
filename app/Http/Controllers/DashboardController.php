<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Vendor;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('role: admin');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->Type == 'admin') {
            return view('dashboard.index', [
                "vendor" => Vendor::latest()->filter(request(['search', 'category', 'city']))->paginate(10)->withQueryString()

            ]);
        } else {
            abort(403);
        }
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
    public function show(string $id)
    {
        //
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
