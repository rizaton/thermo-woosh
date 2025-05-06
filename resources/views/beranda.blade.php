<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <section>
        <div
            class="flex flex-row lg:grid max-w-screen-xl px-1 py-2 md:px-4 md:py-8 md:gap-3 mx-auto gap-1 lg:grid-cols-12 items-center">
            {{-- HERO TEXT --}}
            <div class="text-left w-32 md:w-max lg:text-left lg:col-span-6">
                <h1
                    class="max-w-2xl mb-2 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-quiz-light-text dark:text-quiz-dark-text">
                    ThermoWoosh
                </h1>
                <h2
                    class="max-w-2xl mb-2 font-semibold text-quiz-light-button-hover dark:text-quiz-dark-button lg:mb-4 md:text-lg lg:text-xl">
                    Serunya Belajar Termodinamika!
                </h2>
                <p class="max-w-2xl mb-4 font-light text-quiz-light-text dark:text-quiz-dark-text md:text-lg lg:text-xl">
                    Website interaktif fisika <br>
                    Discovery Learning
                </p>
                <a href="/materi"
                    class="inline-flex items-center justify-center px-5 py-3 mb-4 text-base font-medium text-center bg-quiz-light-button-hover border-2 dark:bg-quiz-dark-button text-quiz-light-text border-quiz-light-text rounded-lg hover:bg-quiz-light-button focus:ring-4 focus:ring-quiz-light-text dark:text-quiz-dark-text dark:border-quiz-dark-text dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Mulai Belajar
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            {{-- HERO IMAGE --}}
            <div class="flex justify-center lg:justify-end lg:col-span-4">
                {{-- {{ dd(htmlspecialchars(pg_unescape_bytea(stream_get_contents(App\Models\Images::all()->find(2)->content)))) }} --}}
                <img src="data:image/png;base64,{{ htmlspecialchars(pg_unescape_bytea(stream_get_contents(App\Models\Images::all()->find(2)->content))) }}"
                    alt="landing-image" class="w-72 md:w-80 lg:w-96 aspect-square">
            </div>

        </div>
    </section>

</x-layout>
