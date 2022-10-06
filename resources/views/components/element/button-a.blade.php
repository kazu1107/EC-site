@props([
    'href' => '',
    'theme' => 'primary',
])
@php
    if(!function_exists('getThemeClassForButtonA')){
        function getThemeClassForButtonA($theme) {
            return match ($theme) {
                'primary' => 'pr-4 no-underline text-sm text-gray-500 hover:text-red-500 hover:duration-200 my-auto',
                'secondary' => 'text-sm text-gray-500 hover:text-red-500 hover:duration-200 my-auto',
                default => '',
            };
        }
    }
@endphp
<a href="{{ $href }}" class="
    text-sm text-gray-500 hover:text-red-500 hover:duration-200 mt-3 {{ getThemeClassForButtonA($theme) }}">
    {{ $slot }}
</a>
<button
