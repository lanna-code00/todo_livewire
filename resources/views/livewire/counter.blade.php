<div class="flex w-full justify-center bg-gray-300 text-center">
   <div class="mt-3 p-8 flex-col">
      <p class="mb-6">Counter Test</p>
      @session('counter_status')
      <div class="w-full bg-red-600 text-white font-normal py-3">
         {{session('counter_status')}}
    </div>
        @endsession
      <div class="counter-class p-5">
            <p class="mb-3 font-black text-xl">{{$counter}}</p>
            <button wire:click='increment' class="bg-blue-600 text-white rounded-sm px-5 py-2 mr-3">+ increase</button>
            <button wire:click='decrement' class="bg-red-600 text-white rounded-sm px-5 py-2">- decrease</button>
      </div>
   </div>
<div class="flex flex-col mt-3 p-8">

</div>
</div>
