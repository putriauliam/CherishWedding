<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Vendor;
use App\Models\Category;
use App\Models\City;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;
    public $search;
    public $queryString = [
        'search' => ['except' => ''],
    ];

    public function render()
    {
        return view('livewire.search',[
            "vendor" => Vendor::when($this->search, function($q, $search){
                $q->where('name', 'like', '%' .$this->search. '%')
                ->orWhere('name', 'like', '%' .$this->search. '%')
                ->orWhereHas('category', function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%');
                })
                ->orWhereHas('city', function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%');
                });
            })
            ->latest()->paginate(10),
            // "vendor" => Vendor::latest()->paginate(10)->withQueryString(),
            'categories' => Category::all(),
            'cities' => City::all(),
        ]);
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }
}
