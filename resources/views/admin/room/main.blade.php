<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Room Page Settings') }}
        </h2>
    </x-slot>
    @section('content')
       @include('components.table-room')
    @endsection
</x-app-layout>