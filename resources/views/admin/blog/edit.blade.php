<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog Edit') }}
        </h2>
    </x-slot>
    @section('content')
        @include('components.edit-blog')
    @endsection
</x-app-layout>
