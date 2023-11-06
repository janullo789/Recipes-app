<?php

namespace App\Livewire;

use App\Models\Shop;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ShopsTable extends Component
{
    use WithPagination;

    public $perPage = 10;

    #[Url(history: true)]
    public $search = '';

    #[Url(history: true)]
    public $category= '';

    #[Url(history: true)]
    public $sortBy = 'name';

    #[Url(history: true)]
    public $sortDir = 'ASC';

    public function setSortBy($sortByField)
    {
        if($this->sortBy === $sortByField) {
            $this->sortDir = ($this->sortDir == "ASC") ? "DESC" : "ASC";
            return;
        }
        $this->sortBy = $sortByField;
        $this->sortDir = 'DESC';
    }

    public function delete(Shop $shop)
    {
        $shop->delete();
    }

    public function render()
    {
        return view('livewire.shops-table', [
            'shops' => Shop::search($this->search)
                ->when($this->category !== '', function($query){
                    $query->where('category', $this->category);
                })
                ->orderBy($this->sortBy, $this->sortDir)
                ->paginate($this->perPage)
        ]);
    }
}
