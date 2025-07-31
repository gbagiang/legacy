<a href="{{ $href ?? '#' }}" class="button {{ $class ?? '' }} {{ $modifier ?? '' }}"
    @if ($ariaLabel) aria-label="{{ $ariaLabel }}" @endif role="button" {{ $attributes }}>
    <span class="button__text">{{ $slot }}</span>
    @if ($withIcon)
        <svg class="button__icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
            xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
            <path d="M5 12H19" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            <path d="M13 6L19 12L13 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
        </svg>
    @endif
</a>
