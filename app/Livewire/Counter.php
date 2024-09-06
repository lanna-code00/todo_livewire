<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $counter = 0;
    public function render()
    {
        return view('livewire.counter')->layout('components.layouts.app')->layoutData([
            'metaKeys'=> 'key1', 'key2', 'key3',
            'metaDescription' => "For students in nigeria",
            "metaAuthor"=>"Maryanne",
            "title" => "Learn livewire"
        ]);
    }

    function increment()
    {
        $this->counter === 20 ? 

        session()->flash('counter_status', 'We need to stop at five (5)')

        : $this->counter++;
    }

    function decrement()
    {
        $this->counter === 0 ?

        session()->flash('counter_status', 'Stop descreasing, we have reached 0')

        : $this->counter-- ;
    }


}
