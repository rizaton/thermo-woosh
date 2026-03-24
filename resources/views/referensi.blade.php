<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section>
        @foreach ($references as $index => $ref)
            <div id="ref-{{ $index }}" class="flex flex-col lg:flex-row lg:gap-4 gap-2 w-full max-w-2xl mx-auto">

                <div class="flex flex-col gap-3">
                    <p class="font-medium text-gray-800 dark:text-blue-100">{{ $ref->title }}
                    <p>{{ $ref->url }}</p>
                    </p>
                    @if ($ref->description)
                        <p class="text-justify pb-5 text-quiz-light-text dark:text-quiz-dark-text ">
                            {{ $ref->description }}</p>
                    @endif
                </div>
            </div>
        @endforeach
    </section>
</x-layout>
