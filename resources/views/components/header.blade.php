@props(['modifier' => ''])

<header class="header {{ $modifier }}"
    @if ($modifier) aria-label="Header {{ $modifier }}" @endif>
    <div class="header__container wrapper">
        <a href="{{ route('home') }}" class="header__logo" aria-label="Главная страница">
            <img src="/images/logo.png" alt="Логотип Цифровое наследие Севастополя">
        </a>
        <nav class="header__nav" aria-label="Основная навигация">
            <ul class="header__list">
                <li>
                    <a href="{{ route('about') }}"
                        class="header__link {{ Route::currentRouteName() === 'about' ? 'header__link--active' : '' }}">О
                        проекте</a>
                </li>
                <li>
                    <a href="{{ route('monumentsPage') }}"
                        class="header__link {{ Route::currentRouteName() === 'monumentsPage' ? 'header__link--active' : '' }}">Памятники</a>
                </li>
                <li>
                    <a href="{{ route('newsPage') }}"
                        class="header__link {{ Route::currentRouteName() === 'newsPage' ? 'header__link--active' : '' }}">Новости</a>
                </li>
                <li>
                    <a href="{{ route('appsPage') }}"
                        class="header__link {{ Route::currentRouteName() === 'appsPage' ? 'header__link--active' : '' }}">VR/AR</a>
                </li>
            </ul>
        </nav>
        <button class="header__burger" type="button" aria-label="Открыть меню" aria-expanded="false" data-burger>
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>
