<div class="min-h-screen flex items-center justify-center p-4 lg:p-0">
    <div class="container mx-auto flex flex-col items-center justify-center p-8 rounded-md bg-gray-100 shadow-2xl lg:w-96 ">
        @if (session('error'))
        <div class="bg-red-600 p-3 w-full text-center text-white italic mb-3">
            
            {{session('error')}}
        </div>
        @endif

        {{-- <div class="session_message">

            @if(session('success'))
                
            <div class="bg-blue-600 p-3 w-full text-center text-white italic mb-3">
                {{session('success')}}
            </div>
            @endif
        </div> --}}
     <div class="w-full mb-4">
         <h1 class="text-xl font-bold text-gray-700">Create an account</h1>
     </div>
                 <form wire:submit.prevent='signup' class="flex flex-col w-full space-y-4">

                     <input type="text" name="name" id="name" placeholder="Maobi Ezeobidi" class="px-3 py-2 rounded-md outline-none bg-gray-200 text-gray-700" wire:model.blur='name'>

                     @error('name')
                     <span class="text-[12px] italic text-red-600">{{$message}}</span>
                     @enderror

                     <input type="text" name="email" id="email" placeholder="maobi@gmail.com" class="px-3 py-2 rounded-md outline-none bg-gray-200 text-gray-700" wire:model='email'>

                     @error('email')
                     <span class="text-[12px] italic text-red-600">{{$message}}</span>
                     @enderror

                     <div class="relative">
                        <input type="password" name="password" id="password" placeholder="*****" class="w-full px-3 py-2 rounded-md outline-none bg-gray-200 text-gray-700" wire:model='password'>

                        <button type="button" onclick="togglePasswordVisibility()" class="absolute inset-y-0 right-0 px-3 py-2 bg-gray-200 text-gray-700 rounded-r-md">
                            <span id="toggleText" class="text-[12px]">show</span>
                        </button>
                    </div>
                     @error('password')
                     <span class="text-[12px] italic text-red-600">{{$message}}</span>
                     @enderror

                     <button type="submit" class="px-3 py-2 rounded-md outline-none bg-blue-600 text-white">Sign-up
                     <span wire:loading class="italic">...</span>
                     </button>
                 </form>
                 <div class="w-full mt-4">
 
                     <span class="items-left justify-end text-[12px] font-sans text-gray-700">Already have an account? 
                         <a href="/login" class="text-blue-600 no-underline">login</a> here
                     </span>
                 </div>
    </div>
 </div>

 <script>
    function togglePasswordVisibility() {

        const password = document.getElementById('password');
        const toggleText = document.getElementById('toggleText');
        return password.type === "password" 
        ? (password.type = "text", toggleText.textContent = "hide")
        : (password.type = "password", toggleText.textContent = "show");

    }
 </script>
 