@props([
                'images' => []
            ])

            @if(count($images) > 0)
            <div x-data="{}" class="rounded flex justify-center">
                {{-- <div class="flex justify-center -mx-2"> --}}
                    @foreach($images as $image)
                    <div class="rounded w-full bg-neutral-100">
                        {{-- <div class="bg-gray-400"> --}}
                            {{-- <a @click="$dispatch('img-modal', {  imgModalSrc: '{{ asset('storage/images/' . $image->name)  }}' })" class="cursor-pointer"> --}}
                                <img alt="{{ $image->name }}" class="rounded bg-neutral-100 h-48 w-48 object-contain mx-auto my-auto" src="{{ asset('storage/images/' . $image->name) }}">
                            {{-- </a> --}}
                        {{-- </div> --}}
                    </div>
                    @endforeach
                {{-- </div> --}}
            </div>
            @endif
