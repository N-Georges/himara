<div class="mt-6 sm:mt-0">
    <div>
        <div class="md:grid md:grid-cols-3 md:gap-6 border-b py-14">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Update Gallery Information</h3>
                    <p class="mt-1 text-sm text-gray-600">Use a permanent address where you can receive mail.</p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2 ">
                <form method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                                    <input name="image"
                                        class="mt-1 form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        type="file" id="formFile">
                                        @if ($errors->any('image'))
                                        <span class="text-red-700">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input type="text" name="name" id="city" autocomplete="name"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        @if ($errors->any('name'))
                                        <span class="text-red-700">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="tag_gallerie_id"
                                        class="block text-sm font-medium text-gray-700">Tag</label>
                                    <select id="tag_gallerie_id" name="tag_gallerie_id" autocomplete="tag_gallerie_id"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        @foreach ($tag as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
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
