<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Vendor;
use App\Models\Category;
use App\Models\User;
use PDF;
use \Cviebrock\EloquentSluggable\Services\SlugService;

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
                "vendor" => Vendor::latest()->filter(request(['search', 'category', 'city']))->paginate(10)->withQueryString(),
                "mua" => Vendor::where('category_id', '=', '1')->count(),
                "foto" => Vendor::where('category_id', '=', '2')->count(),
                "venue" => Vendor::where('category_id', '=', '3')->count(),
                "katering" => Vendor::where('category_id', '=', '4')->count(),
                "totalUser" => User::count(),
                "totalVendor" => Vendor::count(),

            ]);
        } else {
            abort(403);
        }
    }

    public function totalVendor()
    {
        return view('dashboard.index', [
            "mua" => Vendor::where('category_id', '=', '1')->count()
        ]);
    }

    public function cetak()
    {
    	$vendor = Vendor::all();
 
    	$pdf = PDF::loadview('vendor-pdf',['vendor'=>$vendor]);
    	return $pdf->stream();
    }

    // public function dataVendor()
    // {
    //     return view('dashboard.dataVendor', [
            
    //         "vendor" => Vendor::latest()->filter(request(['search', 'category', 'city']))->paginate(10)->withQueryString()
    //     ]);
    // }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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
