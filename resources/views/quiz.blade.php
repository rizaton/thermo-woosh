<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($contents as $content)
        <p>
            {{ $content->content_text }}
        </p>
        <p>
            {{ $content->reference }}
        </p>
        <br>
    @endforeach
</x-layout>
