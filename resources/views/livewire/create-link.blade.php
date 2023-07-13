<div class="p-8">
    <div>
        <form action="{{ route('links.store', auth()->user()->slug) }}" method="POST">
            @csrf

            <span class="text-xl">Create a new link!</span>

            <!-- NAME -->
            <div class="my-3">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" placeholder="Google - the best browser!" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- URL ORIGINAL -->
            <div>
                <x-input-label for="url_long" :value="__('URL')" />
                <x-text-input id="url_long" class="block mt-1 w-full" type="url" name="url_long" :value="old('url_long')"
                    required autofocus autocomplete="url_long" placeholder="https://google.com" />
                <x-input-error :messages="$errors->get('url_long')" class="mt-2" />
            </div>

            <!-- URL SHORT -->
            <div class="my-3">
                <x-input-label for="url_short" :value="__('Slug')" />
                <div class="flex">
                    <span
                        class="inline-flex items-center px-3 text-sm border border-r-0 border-gray-300 rounded-l-md text-gray-500">linker.com/{{ auth()->user()->slug }}/</span>
                    <x-text-input id="url_short"
                        class="rounded-none bg-gray-50 border rounded-r-lg block flex-1 min-w-0 w-full text-sm"
                        type="text" name="url_short" :value="old('url_short')" autofocus autocomplete="url_short"
                        placeholder="short-link" maxlength="16" />
                </div>
                <p class="text-gray-500 text-sm my-1">*Slug can be left empty and will be automatically generated!
                </p>
                <x-input-error :messages="$errors->get('url_short')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4">
                    {{ __('Create') }}
                </x-primary-button>
            </div>

        </form>
    </div>
</div>
