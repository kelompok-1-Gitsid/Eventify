@extends('layouts.auth')

@section('container')
<div class="w-full h-screen bg-white justify-center items-center flex">
    {{-- @if(Session::has('status'))
    <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div>
          <span class="font-medium">{{Session::get('message')}}!</span>
        </div>
    </div>
    @endif --}}
    {{-- Md until Xl --}}
    <div class="flex min-h-full flex-col justify-center font-plusJakarta">
        <div class="md:w-[30em] bg-slate-50 px-10 py-5 rounded-md shadow-md">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Create a new account</h2>
          <p class="mt-2 text-center font-medium">you can create your account with your happiness</p>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="#" method="POST">
            {{-- Username Form --}}
            <div class="flex">
                <div class="basis-1/2 mr-2">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">First Name</label>
                    <x-input-text type="text" name="name" required value="{{ old('name') }}" class="mt-2 block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"/>
                </div>
                <div class="basis-1/2 ml-2">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Last Name</label>
                    <x-input-text type="text" name="name" required value="{{ old('name') }}" class="mt-2 block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"/>
                </div>
            </div>
            <div>
              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
              <div class="mt-2">
                <x-input-text type="text" name="username" required value="{{ old('username') }}" class="block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"/>
                {{-- <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"> --}}
              </div>
            </div>
            {{-- Email Form --}}
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                <div class="mt-2">
                  <x-input-text type="email" name="email" required value="{{ old('email') }}" class="block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"/>
                  {{-- <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"> --}}
                </div>
              </div>
            {{-- Password Form --}}
            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
              </div>
              <div class="mt-2">
                <x-input-text type="password" name="password" required value="{{ old('password') }}" class="block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"/>
                {{-- <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"> --}}
              </div>
            </div>
            {{-- Submit --}}
            <div>
              <button type="submit" class="flex w-full justify-center rounded-md bg-cyan px-3 py-2 text-sm leading-6 shadow-sm hover:bg-blue-500 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500">Sign up</button>
            </div>
          </form>
          <div class="">
            <div class="mt-2 font-plusJakarta">
                <div class="flex items-center justify-between">
                    <hr class="border-b border-gray-500 w-40">
                    <p class=" ">or</p>
                    <hr class="border-b border-gray-500 w-40">
                </div>
                <button type="button" class="text-gray-800 w-full bg-white mt-4 hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center justify-center me-2 mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 48 48" class="w-6 h-6 me-7 -ms-7">
                        <path fill="#fbc02d" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#e53935" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4caf50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1565c0" d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                    </svg>
                    Sign up with Google
                </button>
                <p class="mt-4 mb-4 text-sm text-center text-gray-500">
                    Have an account?
                    <a href="#" class="font-sm leading-6 text-bluelight hover:text-blue-500 ml-1">Log in</a>
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
</div>
@endsection
