<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Add a new Uptime Monitor') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Fill the following form to add a new monitor and monitor it with NX Monitor") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="type" :value="__('Monitor Type')" />
            <x-select-input id="type" name="type" class="mt-1 block w-full" :value="old('name', $user->name)" required
                autofocus autocomplete="type">
                <option value="website">Website</option>
                <option value="ping">Service monitor</option>
            </x-select-input>
            <x-input-error class="mt-2" :messages="$errors->get('type')" />
        </div>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Next') }}</x-primary-button>
        </div>
    </form>
</section>