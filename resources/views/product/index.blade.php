<x-layout title="TOP | EC2">
    <div class="bg-cyan-200">
    <x-layout.single>
        <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
            WELCOME TO EC2 SITE!!
        </h2>
        <x-product.form.post></x-product.form.post>
        <div class="flex justify-center">
        <x-product.list :products="$products"></x-product.list>
        <x-product.music></x-product.music>
        </div>
    </x-layout.single>
    </div>
</x-layout>
