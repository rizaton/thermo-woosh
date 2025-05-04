<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-0">
        <div class="grid gap-8 lg:grid-cols-1">

            {{-- @foreach ($materials as $material) --}}
            {{-- <article
                class="p-6 bg-quiz-light-primary rounded-lg border border-gray-200 shadow-md dark:bg-quiz-dark-primary dark:border-gray-700">
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="#" class="text-gray-800 dark:text-quiz-dark-text">
                        Konsep Termodinamika
                    </a>
                </h2>
                <p class="mb-5 font-medium text-gray-600 dark:text-quiz-dark-text">
                    Termodinamika adalah cabang fisika yang mempelajari hubungan antara panas, energi, dan kerja
                    dalam suatu sistem. Konsep utama dalam termodinamika mencakup hukum-hukum termodinamika, yang
                    menjelaskan bagaimana energi berpindah dan berubah bentuk, serta bagaimana keadaan sistem
                    (seperti suhu, tekanan, dan volume) berubah selama proses fisik atau kimia.
                </p>
                <div class="flex justify-between items-center">
                    <a href="#"
                        class="inline-flex items-center font-medium text-quiz-light-text dark:text-quiz-dark-text hover:underline">
                        Lihat materi
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </article> --}}
            {{-- @endforeach --}}
            @foreach ($materials as $material)
                <article
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="{{ $material['slug'] }}">
                            {{ $material['title'] }}
                        </a>
                    </h2>
                    <p class="mb-5 font-medium text-gray-500 dark:text-gray-400">
                        {{ $material['description'] }}
                    </p>
                    <div class="flex justify-between items-center">
                        <a href="materi/{{ $material['slug'] }}"
                            class="inline-flex items-center font-medium text-quiz-light-text dark:text-quiz-dark-text hover:underline">
                            Lihat materi
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</x-layout>

{{-- <x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-0">
        <div class="grid gap-8 lg:grid-cols-1">
            @foreach ($materials as $material)
                <article
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="{{ $material['slug'] }}">
                            {{ $material['title'] }}
                        </a>
                    </h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                        {{ $material['description'] }}
                    </p>
                    <div class="flex justify-between items-center">
                        <a href="materi/{{ $material['slug'] }}"
                            class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</x-layout> --}}
