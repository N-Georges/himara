<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gallery Create') }}
        </h2>
    </x-slot>
    @section('content')
        @include('components.create-gallerie')
    @endsection
</x-app-layout>
