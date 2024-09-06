<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="{{$metaKeys}}">
        <meta name="description" content="{{$metaDescription}}">
        <meta name="author" content="{{$metaAuthor}}">
        <link href="https://fonts.googleapis.com/css2?family=Moderustic:wght@300..800&display=swap" rel="stylesheet">
        <title>{{ $title ?? 'Learn Livewire' }}</title>
        @vite('resources/css/app.css')
    </head>
    <body>

        <div>

            <nav class="bg-[#5113D7FF] fixed z-20 w-full">
                <div class="mx-auto flex justify-between items-center p-5">
                    <div class="text-xl text-white font-bold">Learn livewire</div>
                    <div class="space-x-3 text-white font-sans">
                        <a href="/" wire:navigate class="transition ease-in-out delay-150 text-white hover:-translate-y-1 hover:scale-110 hover:text-indigo-300 duration-300 mr-3">Home</a>
                        @auth
                           
                        <a href="/todo" wire:navigate class="transition ease-in-out delay-150 text-white hover:-translate-y-1 hover:scale-110 hover:text-indigo-300 duration-300 mr-6">Todo</a>

                        
                        {{-- <form action="{{route('logout')}}" method="POST" id="logout-form">
                            @csrf --}}
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit" class="transition ease-in-out delay-150 text-white hover:-translate-y-1 hover:scale-110 hover:text-indigo-300 duration-300 ml-4">Logout</a>
                        {{-- </form> --}}
                        @endauth

                        @guest
                            
                        <a href="/login" wire:navigate class="transition ease-in-out delay-150 text-white hover:-translate-y-1 hover:scale-110 hover:text-indigo-300 duration-300">Login</a>
                        <span>/</span>
                        <a href="/sign-up" wire:navigate class="transition ease-in-out delay-150 text-white hover:-translate-y-1 hover:scale-110 hover:text-indigo-300 duration-300">Sign up</a>
                        @endguest
                    </div>
                </div>
            
               </nav>

               @if (!Route::is(['login', 'sign-up', 'home']))
                   
               <div class="fixed inset-0 top-[4.2rem]">
                <div class="flex flex-row justify-between items-center h-screen">
               <div class="basis-96 h-full">
                <div class="bg-gray-400 w-full px-2 py-3 rounded-tr-xl rounded-br-xl h-full">
                    <div class="grid grid-cols-1 w-full">
                        <div class="bg-gray-200 shadow-md p-[14px] rounded-md">Folder 1</div>
                    </div>
                </div>
            </div>
               @endif

            {{ $slot }}

        </div>
    </div>
               
        </div>
    </body>
</html>
