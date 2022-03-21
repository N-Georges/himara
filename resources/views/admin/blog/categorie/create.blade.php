<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog Create') }}
        </h2>
    </x-slot>
    @section('content')
        @include('components.create-categorie-blog')
    @endsection
</x-app-layout>
