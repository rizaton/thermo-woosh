<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <div class="flex flex-col gap-4 items-center justify-center">
                @foreach ($videos as $video)
                    <div class="video">
                        <iframe src="${{ $video->url }}"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <p>{{ $video->title }}</p>
                        @if ($video->description)
                            <p class="text-justify">{{ $video->description }}</p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</x-layout>
{{-- <iframe class="aspect-video rounded-md" src="https://www.youtube.com/embed/41yDDKUU84U"
title="Praktikum Fisika &quot;Simulasi PhET Bab Termodinamika&quot;"
allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
