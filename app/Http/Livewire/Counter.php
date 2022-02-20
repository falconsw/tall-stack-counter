<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Contracts\{
    View\View,
    View\Factory,
    Foundation\Application
};

class Counter extends Component
{
    /**
     * @var int $count
     */
    public int $count = 0;

    /**
     * @return int
     */
    public function  increment(): int
    {
        $this->count++;
        return $this->count;
    }

    /**
     * @return int
     */
    public function decrement(): int
    {
        $this->count--;
        return $this->count;
    }


    /**
     * @return void
     */
    public function clear(): void
    {
        $this->count = 0;
    }

    /**
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('livewire.counter');
    }
}
