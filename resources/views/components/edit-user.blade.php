<div class="mt-6 sm:mt-0">
    <div>
        <div class="md:grid md:grid-cols-3 md:gap-6 border-b py-14">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Update User Information</h3>
                    <p class="mt-1 text-sm text-gray-600">Use a permanent address where you can receive mail.</p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2 ">
                <form method="POST" action="{{ route('user.update', $user->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input value="{{ $user->name }}" type="text" name="name" id="name"
                                        autocomplete="given-name"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email
                                        address</label>
                                    <input value="{{ $user->email }}" type="text" name="email" id="last-name"
                                        autocomplete="email"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @if ($errors->any('email'))
                                        <span class="text-red-700">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="role_id" class="block text-sm font-medium text-gray-700">Role</label>
                                    <select id="role_id" name="role_id" autocomplete="role_id"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        @foreach ($role as $item)
                                            <option {{ $item->id == $user->role->id ? 'selected' : '' }}
                                                value="{{ $item->id }}">{{ $item->role_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <x-button class="ml-3">
                                {{ __('save') }}
                            </x-button>
                </form>
            </div>
        </div>
    </div>
</div>
