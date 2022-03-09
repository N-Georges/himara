<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome, {{ ucfirst(Auth::user()->name) }}
        </h2>
    </x-slot>
    @section('content')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h1
                    class="xl:text-4xl md:text-2xl text-xl font-semibold leading-tight text-center text-gray-800 sm:mb-0 mb-12">
                    For more than 25 years, we have been providing assistance  <br class="md:block hidden" />
                    to travelers
                </h1>
                <div class="md:mt-14 mt-4 relative sm:flex items-center justify-center">
                    <img src="https://i.ibb.co/KjrPCyW/map.png" alt="world map image"
                        class="w-full xl:h-full h-96 object-cover object-fill sm:block hidden" />
                    <img src="https://i.ibb.co/SXKj9Mf/map-bg.png" alt="mobile-image"
                        class="sm:hidden -mt-10 block w-full h-96 object-cover object-fill absolute z-0" />
                    {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                            
                        </div> --}}
                </div>
            </div>
        </div>
        </div>
    @endsection
</x-app-layout>
