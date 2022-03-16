<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Create') }}
        </h2>
    </x-slot>
    @section('content')
        @include('components.create-user')
    @endsection
</x-app-layout>
