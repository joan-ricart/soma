@extends('layouts.app')

@section('title', 'Reserva - SOMA Restaurant Barcelona')
@section('og:title', 'Reserva - SOMA Restaurant Barcelona')
@section('description', 'Reserva la teva taula a SOMA Restaurant, al Carrer Provença, 179. Telèfon 605 658 956')
@section('og:description', 'Reserva la teva taula a SOMA Restaurant, al Carrer Provença, 179. Telèfon 605 658 956')

@php
    $iframeUrl = match ($lang) {
        'es' => 'https://www.covermanager.com/reserve/module_restaurant/restaurante-somabar/spanish',
        'en' => 'https://www.covermanager.com/reserve/module_restaurant/restaurante-somabar/english',
    };
@endphp

@section('content')

    <main class="container min-h-screen pb-20 pt-28">
        <div class="mb-4 text-center">
            <a href="{{ route('home') }}" class="inline-block">
                <img src="{{ asset('images/logo-soma.svg') }}" alt="SOMA Restaurant" width="191" height="57" />
            </a>
        </div>

        <nav class="mb-8 text-center text-sm md:text-base">
            <a href="{{ route('book_es') }}"
                class="{{ $lang == 'es' ? 'pointer-events-none opacity-70' : 'text-soma-green underline' }} uppercase">Reserva
                la
                teva taula</a>
            <span class="text-soma-green">/</span>
            <a href="{{ route('book_en') }}"
                class="{{ $lang == 'en' ? 'pointer-events-none opacity-70' : 'text-soma-green underline' }} uppercase">Book
                a
                table</a>
        </nav>

        <div class="mx-4 mx-auto mb-8 max-w-lg">
            <script type="text/javascript" src="https://www.covermanager.com/js/iframeResizer.min.js"></script>
            <iframe id="restaurante-soma" title="Reservas" src="{{ $iframeUrl }}" frameborder="0" height="1000"
                width="100%" onload="iFrameResize();" scrolling="no"></iframe>
        </div>

    </main>

@endsection
