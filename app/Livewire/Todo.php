<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public function render()
    {
        return view('livewire.todo')->layoutData([
            'metaKeys' => 'key1, key2, key3',
            'metaDescription' => "Create your todo list",
            "metaAuthor" => "Maryanne",
            "title" => "Best Todo App!"
        ]);
    }
}
