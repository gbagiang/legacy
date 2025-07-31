@extends('layouts.app')

@php
    $headerModifier = 'header--hero';
@endphp

@section('title', 'Цифровое наследие')

@section('content')
    <section class="hero">
        <h1 class="section-title">Hello world!</h1>
        <x-button href="{{ route('about') }}" class="hero__button" modifier="button--primary" aria-label="Подробнее о проекте"
            withIcon=1>
            Подробнее
        </x-button>
    </section>
@endsection
