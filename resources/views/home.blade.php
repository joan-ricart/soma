@extends('layouts.app')

@section('title', 'SOMA Restaurant Barcelona')
@section('og:title', 'SOMA Restaurant Barcelona')
@section('description', "Deixa't sorprendre per la nostra cuina, amb producte de temporada, vins fins i còctels.")
@section('og:description', "Deixa't sorprendre per la nostra cuina, amb producte de temporada, vins fins i còctels.")

@section('content')
    <main>
        <div class="md:pb-42 flex flex-col items-center justify-center overflow-hidden pb-32 pt-36 md:pt-48">
            <img src="{{ asset('images/logo-soma.svg') }}" class="max-w-4/5 mb-8" alt="Logo SOMA" width="501"
                height="151" />

            <nav class="flex items-center justify-center gap-4">
                <a href="{{ route('book_es') }}"
                    class="border-soma-green text-soma-green inline-block w-28 whitespace-nowrap rounded border bg-white p-2 text-center uppercase md:w-32 md:text-lg">Reserva</a>
                <a href="{{ route('menu') }}"
                    class="border-soma-green text-soma-green inline-block w-28 whitespace-nowrap rounded border bg-white p-2 text-center uppercase md:w-32 md:text-lg">Carta</a>
            </nav>
        </div>

        @php
            $images = [
                [
                    'src' => asset('images/slider-home/Image-4.jpg'),
                    'alt' => 'Imagen SOMA 1',
                ],
                [
                    'src' => asset('images/slider-home/Image-5.jpg'),
                    'alt' => 'Imagen SOMA 3',
                ],
                [
                    'src' => asset('images/slider-home/Image-3.jpg'),
                    'alt' => 'Imagen SOMA 4',
                ],
                [
                    'src' => asset('images/slider-home/Image-1.jpg'),
                    'alt' => 'Imagen SOMA 5',
                ],
                [
                    'src' => asset('images/slider-home/Image-2.jpg'),
                    'alt' => 'Imagen SOMA 5',
                ],
                [
                    'src' => asset('images/slider-home/Image-6.jpg'),
                    'alt' => 'Imagen SOMA 6',
                ],
            ];
        @endphp
        <div class="swiper relative">
            <div class="swiper-wrapper">
                @foreach ($images as $image)
                    <div class="swiper-slide w-auto!">
                        <img src="{{ $image['src'] }}" alt="{{ $image['alt'] }}"
                            class="max-h-[300px] object-contain sm:max-h-[450px] md:max-h-[600px]" />
                    </div>
                @endforeach
            </div>

            <div class="swiper-prev absolute left-4 top-1/2 z-10 -translate-y-1/2 transform">
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="26" viewBox="0 0 17 26" fill="none">
                    <g filter="url(#filter0_d_138_82)">
                        <path d="M12.7739 3L4.70711 11.0668C4.31658 11.4573 4.31658 12.0904 4.70711 12.481L12.7739 20.5477"
                            stroke="white" stroke-width="4" stroke-linecap="round" />
                    </g>
                    <defs>
                        <filter id="filter0_d_138_82" x="0.414215" y="0" width="16.3596" height="25.5477"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="1" />
                            <feGaussianBlur stdDeviation="1" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.45 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_138_82" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_138_82" result="shape" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <div class="swiper-next absolute right-4 top-1/2 z-10 -translate-y-1/2 transform">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="26" viewBox="0 0 18 26" fill="none">
                    <g filter="url(#filter0_d_138_83)">
                        <path d="M4.77399 20.5477L12.8407 12.481C13.2313 12.0904 13.2313 11.4573 12.8407 11.0668L4.77399 3"
                            stroke="white" stroke-width="4" stroke-linecap="round" />
                    </g>
                    <defs>
                        <filter id="filter0_d_138_83" x="0.774048" y="0" width="16.3596" height="25.5477"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="1" />
                            <feGaussianBlur stdDeviation="1" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.45 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_138_83" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_138_83" result="shape" />
                        </filter>
                    </defs>
                </svg>
            </div>
        </div>

        <div class="container max-w-4xl py-20">
            <div class="grid md:grid-cols-2 md:items-center md:gap-8">
                <div class="text-center max-md:order-2">
                    <img class="mx-auto mt-4 inline-block max-w-full" src="{{ asset('images/ilustracion-home.png') }}"
                        width="493" height="667" alt="Ilustración restaurante SOMA" />
                </div>
                <div class="max-md:order-1 max-md:mb-8 max-md:text-center">
                    <p class="mb-6"><b>DES DE 1900</b></p>
                    <p class="mb-6">
                        Bistró de barri amb història.<br>
                        Cuina de temporada amb influència italiana, plats per compartir, vermuts amb caràcter i vins fins.
                    </p>
                    <p class="mb-8">
                        Esmorzar, dinar i sopar.
                    </p>
                    <div class="mb-2 flex items-center justify-center gap-2 md:justify-start">
                        <img src="{{ asset('images/logo-instagram.svg') }}" alt="Instagram" width="16"
                            height="16" />
                        <a href="https://www.instagram.com/somabcn_" class="text-soma-green underline"
                            target="_blank">@somabcn_</a>
                    </div>
                    <nav class="mt-10 flex items-center justify-center gap-4 md:justify-start">
                        <a href="{{ route('book_es') }}"
                            class="border-soma-green text-soma-green inline-block w-28 whitespace-nowrap rounded border bg-white p-2 text-center uppercase md:w-32 md:text-lg">Reserva</a>
                        <a href="{{ route('menu') }}"
                            class="border-soma-green text-soma-green inline-block w-28 whitespace-nowrap rounded border bg-white p-2 text-center uppercase md:w-32 md:text-lg">Carta</a>
                    </nav>
                </div>

            </div>
        </div>
    </main>
@endsection
