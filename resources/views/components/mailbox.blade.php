<div x-data="{ notificationOpen: false }" class="relative">
    <button @click="notificationOpen = ! notificationOpen" class="flex mx-4 text-gray-600 focus:outline-none">
        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            </path>
        </svg>
    </button>

    <div x-show="notificationOpen" @click="notificationOpen = false" class="fixed inset-0 h-full w-full z-10"
        style="display: none;"></div>

    <div x-show="notificationOpen"
        class="absolute right-0 mt-2 w-80 bg-white rounded-lg ring-1 ring-black ring-opacity-5 shadow-xl overflow-hidden z-10"
        style="width: 20rem; display: none;">

        {{-- @foreach ($mails as $item) --}}
        <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:text-white hover:bg-indigo-600 -mx-2">
            <img class="h-8 w-8 rounded-full object-cover mx-1" src="{{ asset('himara/images/users/user.jpg') }}" alt="avatar">
            <p class="text-sm mx-2">
                <span class="font-bold" href="#">john doe</span> send message 
            </p>
        </a>
        {{-- @endforeach --}}
    </div>
</div>
