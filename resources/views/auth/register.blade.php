<x-guest-layout>

    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-2 text-center text-xl font-bold leading-9 tracking-tight text-gray-900">Create a new account</h2>
        <p class="mt-2 text-center font-medium">you can create your account with your happiness</p>
    </div>

    <div class="mt-8">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block w-full border-0 py-2 text-gray-900 sm:text-sm sm:leading-6"
                    type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block w-full border-0 py-2 text-gray-900 sm:text-sm sm:leading-6"
                    type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block w-full border-0 py-2 text-gray-900 sm:text-sm sm:leading-6"
                    type="password" name="password" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation"
                    class="block w-full border-0 py-2 text-gray-900 sm:text-sm sm:leading-6" type="password"
                    name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Select Role -->
            <div class="mt-4">
                <x-input-label for="role" :value="__('Select Type')" />
                <select name="role" id="role" class="block w-full py-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-md bg-gray-50 focus:ring-blue-500 focus:border-blue-500" required>
                    <option selected> Choose Type </option>
                    <option value="user">User</option>
                    <option value="vendor">Vendor</option>
                </select>

                <x-input-error :messages="$errors->get('role')" class="mt-2" />
            </div>

            <div class="mt-8">
                <x-primary-button
                    class="flex w-full justify-center rounded-md bg-cyan px-3 py-2 text-sm leading-6 shadow-sm hover:bg-blue-500 hover:text-white">
                    {{ __('Register') }}
                </x-primary-button>
            </div>


            <div class="">
                <div class="flex justify-center mt-4">
                    <p class=""> have an account ?
                        <a class="ml-1 underline text-sm text-bluelight hover:text-gray-900 rounded-md"
                            href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </p>
                </div>
            </div>
        </form>
    </div>

</x-guest-layout>
