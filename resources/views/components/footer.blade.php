<footer class="footer">
    <div class="footer__cnt wrapper">
        <div class="footer__hero">
            <a href="{{ route('home') }}" class="footer__logo" aria-label="Главная страница">
                <img src="/images/logo.png" alt="Логотип Цифровое наследие Севастополя">
            </a>
            <div class="footer__nav">
                <nav class="footer__block" aria-label="Основная навигация">
                    <h3 class="footer__title">Навигация</h3>
                    <ul class="footer__list">
                        <li><a href="{{ route('about') }}"
                                class="footer__link {{ Route::currentRouteName() === 'about' ? 'footer__link--active' : '' }}">О
                                проекте</a></li>
                        <li><a href="{{ route('monumentsPage') }}"
                                class="footer__link {{ Route::currentRouteName() === 'monumentsPage' ? 'footer__link--active' : '' }}">Памятники</a>
                        </li>
                        <li><a href="{{ route('newsPage') }}"
                                class="footer__link {{ Route::currentRouteName() === 'newsPage' ? 'footer__link--active' : '' }}">Новости</a>
                        </li>
                        <li><a href="{{ route('appsPage') }}"
                                class="footer__link {{ Route::currentRouteName() === 'appsPage' ? 'footer__link--active' : '' }}">VR/AR</a>
                        </li>
                    </ul>
                </nav>
                <nav class="footer__block" aria-label="Контакты">
                    <h3 class="footer__title">Контакты</h3>
                    <ul class="footer__list">
                        <li><a href="https://vk.com/yourgroup" class="footer__link" rel="noopener noreferrer"
                                target="_blank">Вконтакте</a></li>
                        <li><a href="https://t.me/yourchannel" class="footer__link" rel="noopener noreferrer"
                                target="_blank">Телеграм</a></li>
                        <li><a href="mailto:info@heritage-sevastopol.ru" class="footer__link">Почта</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <p class="footer__txt">Сохраняя прошлое, создаем будущее</p>
    </div>
    <div class="footer__copy">
        <span class="footer__copyright">© Цифровое наследие / Севастополь / {{ date('Y') }}</span>
    </div>
</footer>
