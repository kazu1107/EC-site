<x-layout title="TOP | EC2">
    <x-product.header></x-product.header>
    <div class="bg-neutral-200">
    <x-layout.single>
        <div class="shadow-md bg-white mt-3">
            <x-product.form.post></x-product.form.post>
        </div>
        <div class="flex justify-center mt-5">
            <x-product.list :products="$products"></x-product.list>
            <div>
                <x-product.music></x-product.music>
            </div>

        </div>
    </x-layout.single>
    </div>
</x-layout>
