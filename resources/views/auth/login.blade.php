<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label class="text-dark" for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full bg-white" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label class="text-dark" for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full bg-white" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        {{-- Dropdown ROle
        <div class="mt-4">
            <x-input-label class="text-dark" for="role" :value="__('Role')" />
            <select id="role" class="block mt-1 w-full rounded" name="role" required>
                <option value="" disabled selected>{{ __('Select Role') }}</option>
                <option value="admin">Admin</option>
                <option value="siswa">Siswa</option>
                <option value="pelatih">Pelatih</option>
            </select>
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div> --}}
        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ms-2 text-sm text-gray-900 dark:text-gray-900">{{ __('Remember me') }}</span>
            </label>
        </div>
        <div class="flex items-center justify-between mt-4">
            <a class="underline text-sm text-gray-900 dark:text-gray-900 hover:text-gray-400 dark:hover:text-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('register') }}">
                {{ __('Register') }}
            </a>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-900 dark:text-gray-900 hover:text-gray-400 dark:hover:text-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3" style="background-color: #4a90e2; hover: background-color: #357ae8;">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
