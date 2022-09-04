<x-layout title="編集 | EC2">
    <x-layout.single>
        <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
            WELCOME TO EC2 SITE!!
        </h2>
        @php
            $breadcrumbs = [
                ['href' => route('product.index'), 'label' => 'TOP'],
                ['href' => '#', 'label' => '編集']
            ];
        @endphp
        <x-element.breadcrumbs :breadcrumbs="$breadcrumbs"></x-element.breadcrumbs>
        <x-product.form.put :product="$product"></x-product.form.put>
    </x-layout.single>
</x-layout>
