<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:page>{{ $page }}</x-slot:page>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a href="/materi" class="font-medium text-xs text-blue-600 dark:text-blue-200 hover:underline">
                        &laquo Kembali ke semua materi
                    </a>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $title }}
                    </h1>
                </header>
                @foreach ($contents as $content)
                    @if ($content->is_hidden)
                        <div x-data="{ show: false }" class="mb-4">
                            <button @click="show = !show"
                                class="text-blue-600 dark:text-blue-300 hover:underline text-sm mb-2"
                                x-text="show ? 'Sembunyikan' : 'Lihat Isi'"></button>

                            <div x-show="show" x-transition>
                                @if ($content->content_text)
                                    <p class="text-justify text-quiz-light-text dark:text-quiz-dark-text">
                                        {!! nl2br(e($content->content_text)) !!}
                                    </p>
                                @endif

                                @if ($content->content_image)
                                    <div class="flex justify-center w-full max-w-3xl">
                                        <img src="data:image/png;base64,{{ $content->content_image }}" alt="image">
                                    </div>
                                @endif
                            </div>
                        </div>
                    @else
                        @if ($content->content_text)
                            @if ($content->is_title)
                                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2 pt-11">
                                    {{ $content->content_text }}
                                </h2>
                            @else
                                <p class="text-justify text-quiz-light-text dark:text-quiz-dark-text">
                                    {!! nl2br(e($content->content_text)) !!}
                                </p>
                            @endif
                        @endif

                        @if ($content->content_image)
                            <div class="flex justify-center w-full max-w-3xl">
                                <img src="data:image/png;base64,{{ $content->content_image }}" alt="image">
                            </div>
                        @endif
                        <br>
                    @endif
                @endforeach
            </article>
        </div>
    </main>
</x-layout>
