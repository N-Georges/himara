<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile Settings') }}
        </h2>
    </x-slot>
    @section('content')
        @include('components.update-profile')
        @include('components.password-profile')
    @endsection
</x-app-layout>
