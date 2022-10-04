<x-layout title="TOP | EC2">
    <x-product.header></x-product.header>
    <div class="bg-neutral-200">
    <x-layout.single>
        <div class="shadow-md bg-white my-3">
            <x-product.form.post></x-product.form.post>
        </div>
    </x-layout.single>
    <x-product.list :products="$products"></x-product.list>
    </div>
    <a name="pagebottom">
    <x-product.footer></x-product.footer>
    </a>

</x-layout>
{{-- <div class="bg-green-300 w-full h-full">
    <img class="object-contain h-48 w-full" src="/images/home.png">
</div>
 --}}
