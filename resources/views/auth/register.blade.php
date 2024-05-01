<x-guest-layout>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name: </label>
            <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
            <x-input-error :messages="$errors->get('name')" class="mt-2" /> 
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username">
            <x-input-error :messages="$errors->get('email')" class="mt-2" /> 
        </div>
       
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input  id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" >
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Password Confirmation</label>
            <input  id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" >
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" /> 
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
        
    </form>
</x-guest-layout>
