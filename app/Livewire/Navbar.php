<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.navbar')->layout('components.layouts.app')->layoutData([
            'metaKeys'=> 'key1', 'key2', 'key3',
            'metaDescription' => "Navigation Bar",
            "metaAuthor"=>"Maryanne",
            "title" => "Navigation"
        ]);;
    }

    function signin()
    {
        return view('livewire.login');
    }

    function register()
    {
        return view('livewire.sign-up');
    }
}
