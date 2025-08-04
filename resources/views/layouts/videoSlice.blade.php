@php
    // Параметры по умолчанию
    $videoUrl = $videoUrl ?? 'ogogogoog';
    $modifier = $modifier ?? 'kruto';
@endphp

<section class="videoSlice {{ $modifier }}" aria-labelledby="videoSliceTitle">
    <div class="wrapper">

        <div class="videoSlice__videoWrapper">
            <iframe class="videoSlice__iframe" src="{{ $videoUrl }}" title="Видео о наследии Севастополя" width="100%"
                height="100%" allow="encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0"
                allowfullscreen loading="lazy"></iframe>
            <div class="videoSlice__fallback hidden">
                <p>Видео недоступно. Пожалуйста, проверьте подключение или <a href="{{ $videoUrl ?? '#' }}">посмотрите
                        на ВКонтакте</a>.</p>
            </div>
        </div>

    </div>
</section>
