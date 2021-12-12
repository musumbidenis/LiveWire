<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component

{
    public $count = 0;


    public function increment()

    {

        $this->count++;
        $this->emit('alert', ['type' => 'success',  'message' => 'Counter incremented successfully!']);

    }

    public function decrement()

    {

        $this->count--;

    }

    public function render()

    {

        return view('livewire.counter');

    }

}