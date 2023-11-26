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
                <div class="font-plusJakarta">
                    <div class="flex items-center justify-between mx-2 my-5">
                        <hr class="border-b border-gray-500 w-52">
                        <p class=" ">or</p>
                        <hr class="border-b border-gray-500 w-52">
                    </div>
                    <button type="button"
                        class="text-gray-800 w-full bg-white mt-4 hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center justify-center me-2 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 48 48"
                            class="w-6 h-6 me-7 -ms-7">
                            <path fill="#fbc02d"
                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                            </path>
                            <path fill="#e53935"
                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                            </path>
                            <path fill="#4caf50"
                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                            </path>
                            <path fill="#1565c0"
                                d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                            </path>
                        </svg>
                        Sign up with Google
                    </button>
                    <div class="flex justify-center mt-4">
                        <p class=""> have an account ?
                            <a class="ml-1 underline text-sm text-bluelight hover:text-gray-900 rounded-md"
                                href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>

</x-guest-layout>
