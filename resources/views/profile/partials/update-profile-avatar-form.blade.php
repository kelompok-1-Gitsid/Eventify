<section>
    <div class="flex flex-col">
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Profile Avatar') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Update your avatar profile') }}
            </p>
        </header>

        <div class="">
            @if (Auth::user()->avatar)
                <img src="{{ asset('uploads/' . Auth::user()->avatar) }}" alt="Profile"
                    class="w-72 h-72 mx-auto rounded-full mb-3 mt-7">
            @else
                <img src="{{ asset('assets/img/avatar/avatar3.png') }}" alt="Default Profile"
                    class="w-72 h-72 mx-auto rounded-full mb-3 mt-7">
            @endif
        </div>
        <div class="">
            <form action="{{ route('profile.avatar') }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <x-input-label for="name" :value="__('Profile Image')" />
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" id="avatar" name="avatar" value="{{ old('avatar', $user->avatar ?? '') }}"/>
                    </label>
                </div>

                </div>

                <x-primary-button class="submit-button flex w-full justify-center rounded-md">
                    {{ __('Update') }}
                </x-primary-button>
                @if (session('status') === 'profile-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-green-600"
                    >{{ __('Saved.') }}</p>
                @endif
            </form>
        </div>
    </div>
</section>
