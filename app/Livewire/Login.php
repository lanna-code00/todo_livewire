<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public string $email;
    public string $password;

    public User $user;
    protected $rules = [
        'email' => ['bail', 'required', 'exists:users,email', 'email'],
        'password' => ['bail', 'required']
    ];
    public function render()
    {
        return view('livewire.login')->layoutData([
            'metaKeys' => 'key1, key2, key3',
            'metaDescription' => "Login page",
            "metaAuthor" => "Maryanne",
            "title" => "Login Page"
        ]);
    }

    public function updated($propertyName)
    {
        return $this->validateOnly($propertyName);
    }

    function login(Request  $request)
    {
        $data = $this->validate();
        if (!Auth::attempt($data)) {
           session()->flash('error', 'invalid credentials');
        } else{
            session()->flash('success', 'Logged in successfully!');
            return redirect()->to('/');
            // $user = $request->user();
            // dd($user->createToken($user->email)->plainTextToken);
        }
      

    }
}
