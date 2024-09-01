<x-guest-layout>
    <form action="{{ route('tenant.store') }}" method="POST">
        @csrf

        <div>
            <x-input-label :value="__('Empresa')" for="company" />
            <x-text-input :value="old('company')" autocomplete="company" autofocus class="block mt-1 w-full" id="company"
                name="company" required type="text" />
            <x-input-error :messages="$errors->get('company')" class="mt-2" />
        </div>


        <div class="mt-4">
            <x-input-label :value="__('Domínio')" for="domain" />
            <div class="flex items-baseline">
                <x-text-input :value="old('domain')" autocomplete="domain" autofocus class="block mt-1 mr-2 w-2/3"
                    id="domain" name="domain" required type="text" /><span
                    class="text-white">.simplefood.test</span>
            </div>
            <x-input-error :messages="$errors->get('domain')" class="mt-2" />
        </div>

        <!-- Name -->
        <div class="mt-4">
            <x-input-label :value="__('Name')" for="name" />
            <x-text-input :value="old('name')" autocomplete="name" autofocus class="block mt-1 w-full" id="name"
                name="name" required type="text" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label :value="__('Email')" for="email" />
            <x-text-input :value="old('email')" autocomplete="username" class="block mt-1 w-full" id="email"
                name="email" required type="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label :value="__('Password')" for="password" />

            <x-text-input autocomplete="new-password" class="block mt-1 w-full" id="password" name="password" required
                type="password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label :value="__('Confirm Password')" for="password_confirmation" />

            <x-text-input autocomplete="new-password" class="block mt-1 w-full" id="password_confirmation"
                name="password_confirmation" required type="password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
