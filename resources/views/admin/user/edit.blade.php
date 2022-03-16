<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Edit') }}
        </h2>
    </x-slot>
    @section('content')
        @include('components.edit-user')
    @endsection
</x-app-layout>
