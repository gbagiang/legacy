<section class="heroSlice" aria-labelledby="heroSliceTitle">
    <div class="heroSlice__wrapper wrapper">
        <x-header modifier="header--hero" />
        <div class="heroSlice__content">
            <h1 id="heroSliceTitle" class="heroSlice__title">
                {{ $title ?? 'сохраняем и популяризируем исторические и культурные достояния города' }}</h1>
            <x-button href="{{ $buttonHref ?? route('home') }}" class="heroSlice__button" modifier="button--primary"
                aria-label="Подробнее о проекте" with-icon>
                Подробнее
            </x-button>
        </div>
    </div>
</section>
