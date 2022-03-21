<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact Page Settings') }}
        </h2>
    </x-slot>
    @section('content')
       @include('components.table-mail')
    @endsection
</x-app-layout>