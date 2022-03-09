<div class="mt-14 md:grid md:grid-cols-3 md:gap-6 border-b pb-14">
    <div class="md:col-span-1 ">
        <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Update Password</h3>
            <p class="mt-1 text-sm text-gray-600">Ensure Your account is using a long, random password to stay
                secure.</p>
        </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <form method="POST" action="{{ route('profile-password.update', Auth::user()->id) }}">
            @csrf
            @method('PUT')
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="col-span-6 sm:col-span-3 mb-4">
                        <label for="first-name" class="block text-sm font-medium text-gray-700">Old
                            Password</label>
                        <input type="password" name="old_password" id="old_password" autocomplete="given-name"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @if ($errors->any('old_password'))
                            <span class="text-red-700">{{ $errors->first('old_password') }}</span>
                        @endif
                    </div>
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3 grow">
                            <label for="first-name" class="block text-sm font-medium text-gray-700">New
                                Password</label>
                            <input type="password" name="new_password" id="new_password" autocomplete="given-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @if ($errors->any('new_password'))
                                <span class="text-red-700">{{ $errors->first('new_password') }}</span>
                            @endif
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="email-address" class="block text-sm font-medium text-gray-700">Confirm
                                Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" autocomplete="email"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @if ($errors->any('confirm_password'))
                                <span class="text-red-700">{{ $errors->first('confirm_password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="flex items-center mt-4">
                        <input class="rounded-sm mr-1 border-gray-300" type="checkbox" onclick="viewPassword()">
                        <span class="block text-sm font-medium text-gray-70">Show Password</span>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <x-button class="ml-3">
                        {{ __('save') }}
                    </x-button>
        </form>
    </div>
</div>
