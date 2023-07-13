<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your links') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @forelse ($links as $link)
                        <p class="text-xl">
                            <a href="{{ $link->url_long }}">{{ $link->name ? $link->name : $link->url_long }}</a>
                        </p>
                    @empty
                        <p class="text-xl">You don't have any links yet!</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
