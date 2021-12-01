<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartButton extends Component
{

    public int $qty = 0; // total cart items

    protected $listeners = ['cartUpdated' => 'update'];

    public function mount(): void
    {
        $this->update();
    }

    /**
     * Update total cart item qty.
     *
     * @return void
     */
    public function update(): void
    {
        $this->qty = array_sum(cart()->all());
    }


    public function toggle(): void
    {
        $this->emit('toggleCart');
    }

    public function render()
    {
        return view('livewire.cart-button');
    }
}
