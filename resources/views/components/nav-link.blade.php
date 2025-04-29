@props(['active' => false])
<a {{ $attributes }}
    class="{{ $active ? 'bg-quiz-light-button text-quiz-light-text hover:bg-quiz-light-button-hover dark:hover:bg-quiz-dark-button-hover dark:bg-quiz-dark-button dark:text-quiz-dark-text' : 'text-quiz-light-text dark:text-quiz-dark-text dark:hover:bg-quiz-dark-button-hover dark:hover:text-quiz-light-base hover:bg-quiz-light-button-hover hover:text-quiz-dark-base-2' }} rounded-md md:px-3 md:py-2 text-xs sm:text-sm font-medium px-2 py-1"
    aria-current="{{ $active ? 'page' : 'false' }}">{{ $slot }}</a>
