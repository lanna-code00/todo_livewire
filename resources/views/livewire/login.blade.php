<div class="min-h-screen flex items-center justify-center p-4 lg:p-0">
   <div class="container mx-auto flex flex-col items-center justify-center p-8 rounded-md bg-gray-100 shadow-2xl lg:w-96 ">
    <div class="session_message">
        @if (session('error'))
            <div class="bg-red-600 p-3 w-full text-center text-white italic mb-3">
                
                {{session('error')}}
            </div>
            @endif
        </div>  

        {{-- <div class="session_message">

            @if(session('success'))
                
            <div class="bg-blue-600 p-3 w-full text-center text-white italic mb-3">
                {{session('success')}}
            </div>
            @endif
        </div> --}}
    <div class="w-full mb-4">
        <h1 class="text-xl font-bold text-gray-700">Login</h1>
    </div>
                <form wire:submit.prevent='login' class="flex flex-col w-full space-y-4">
                    <input type="text" name="email" id="" placeholder="annie@gmail.com" wire:model='email' class="px-3 py-2 rounded-md outline-none bg-gray-200 text-gray-700">
                    @error('email')
                        <span class="italic text-[12px] text-red-600">{{$message}}</span>
                    @enderror
                    <div class="relative">
                        <input type="password" name="password" id="password" placeholder="*****" class="w-full px-3 py-2 rounded-md outline-none bg-gray-200 text-gray-700" wire:model='password'>

                        <button type="button" onclick="togglePasswordVisibility()" class="absolute inset-y-0 right-0 px-3 py-2 bg-gray-200 text-gray-700 rounded-r-md">
                            <span id="toggleText" class="text-[12px]">show</span>
                        </button>
                    </div>
                    @error('password')
                    <span class="italic text-[12px] text-red-600">{{$message}}</span>
                @enderror

                    <button type="submit" class="px-3 py-2 rounded-md outline-none bg-blue-600 text-white">Login</button>
                </form>
                <div class="w-full mt-4">

                    <span class="items-left justify-end text-[12px] font-sans text-gray-700">Don't have an account yet? 
                        <a href="/sign-up" class="text-blue-600 no-underline">sign-up</a> here
                    </span>
                </div>
   </div>
</div>

<script>
    const togglePasswordVisibility = () => {
        const passwordInput = document.getElementById('password');
        const toggleText = document.getElementById('toggleText');
        return passwordInput.type === "password"
        ? (passwordInput.type = "text", toggleText.textContent = "hide") 
        : (passwordInput.type = "password" , toggleText.textContent = "show");

    }

    function setMessageTimeout()
    {
        const messageContainer = document.getElementsByClassName('session_message');
        Array.from(messageContainer).forEach(element => {
            window.livewire.on('alert_remove', () => {
                setTimeout(() => element.style.display = "none");
            }, 2000)
            // setTimeout(() => {
            //     element.style.display = "none"
            // }, 2000);
        });
    }

    document.addEventListener('DOMContentLoaded', setMessageTimeout);

</script>
