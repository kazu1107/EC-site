<x-layout title="TOP | EC2">
    <x-product.header></x-product.header>
    <div class="bg-white">
    {{-- <x-layout.single>
        <div class="bg-white my-3">
            <x-product.form.post></x-product.form.post>
        </div>
    </x-layout.single> --}}
    <x-product.list :products="$products"></x-product.list>
    </div>
    <x-product.footer></x-product.footer>
    {{-- </a> --}}

</x-layout>
{{-- <div class="bg-green-300 w-full h-full">
    <img class="object-contain h-48 w-full" src="/images/home.png">
</div>
--}}
{{-- <div class="container h-screen flex justify-center items-center">
    <div class="relative">
        <div class="absolute top-4 left-3">
            <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
        </div>
    <input type="text" class="h-14 w-96 pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none" placeholder="Search anything...">
        <div class="absolute top-2 right-2">

            <button class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">Search</button>

        </div>
    </div>
</div> --}}
