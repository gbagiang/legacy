<section class="aboutSlice {{ $modifier ?? '' }}" aria-labelledby="aboutSliceTitle">
    <div class="wrapper">
        <h2 id="aboutSliceTitle" class="about__title section-title">{{ $title ?? '#очемпроект' }}</h2>
        <div class="about__cnt">
            <p class="about__subtitle">
                {{ $subtitle ?? 'комплексный подход с использованием ' }}
                <span class="about__subtitle-m" aria-label="современные цифровые технологии">современных цифровых
                    технологий</span>
            </p>
            <ul class="about__list">
                @foreach ($cards as $card)
                    <li>
                        <div class="directionCard">
                            <h3 class="directionCard__title">{{ $card['title'] }}</h3>
                            <p class="directionCard__info">{{ $card['info'] }}</p>
                            <x-button href="{{ $card['href'] }}" class="directionCard__button"
                                modifier="button--primary" aria-label="Перейти к {{ $card['title'] }}" with-icon>
                                Перейти
                            </x-button>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
