<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 antialiased">
        <div class="flex justify-between px-0 lg:px-4 mx-auto max-w-screen-xl ">
            <div class="flex flex-col lg:flex-row gap-4 lg:flex-wrap lg:pl-4 lg:gap-6 ">
                @foreach ($videos as $index => $video)
                    <div id="video{{ $index }}"
                        class="flex flex-col lg:flex-row lg:gap-4 gap-2 w-full max-w-2xl mx-auto">
                        <iframe src="{{ $video->url }}" class="lg:aspect-video rounded-md"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <div class="flex flex-col gap-3">
                            <p class="font-medium text-gray-800 dark:text-blue-100">{{ $video->title }}
                            </p>
                            @if ($video->description)
                                <p class="text-justify pb-5 text-quiz-light-text dark:text-quiz-dark-text ">
                                    {{ $video->description }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</x-layout>
