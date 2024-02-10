<?php

namespace App\Livewire;

use App\Models\Shop;
use Illuminate\Contracts\View\View;
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

    /**
     * @param $sortByField
     * @return void
     */
    public function setSortBy($sortByField): void
    {
        if($this->sortBy === $sortByField) {
            $this->sortDir = ($this->sortDir == "ASC") ? "DESC" : "ASC";
            return;
        }
        $this->sortBy = $sortByField;
        $this->sortDir = 'DESC';
    }

    /**
     * @param Shop $shop
     * @return void
     */
    public function delete(Shop $shop): void
    {
        $shop->delete();
    }

    /**
     * @return View
     */
    public function render(): View
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
