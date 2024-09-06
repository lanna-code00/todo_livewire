<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class SignUp extends Component
{
    public string $name;
    public string $email;
    public string $password;

    #[Rule(
        [
            'name' => ['bail', 'required', 'string', 'min:2'],
            'email' => ['bail','required', 'string', 'unique:users,email', 'email'],
            'password' => ['bail', 'required', 'string']
        ] 
        
        )]
    public function render()
    {
        return view('livewire.sign-up')->layoutData([
            'metaKeys' => 'key1, key2, key3',
            'metaDescription' => "Login page",
            "metaAuthor" => "Maryanne",
            "title" => "Sign up"
        ]);
    }

    public function updated($propertyName)
    {
        // Validate only the specific field that was updated
        $this->validateOnly($propertyName);
    }

    function signup()
    {
        $data = $this->validate();
        try {
    
            User::create($data);
            session()->flash('success', 'Welcome to the club!');
            return redirect()->to('/login');
        } catch (\Throwable $th) {
            session()->flash('error', $th->getMessage());
        }
    }
}
