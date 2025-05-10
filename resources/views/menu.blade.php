@extends('layouts.app')

@section('title', 'Carta - SOMA Restaurant Barcelona')
@section('og:title', 'Carta - SOMA Restaurant Barcelona')
@section('description', 'Descobreix la nostra carta.')
@section('og:description', 'Descobreix la nostra carta.')

@section('content')

    <main class="container min-h-screen pb-20 pt-28">
        <div class="mb-4 text-center">
            <a href="{{ route('home') }}" class="inline-block">
                <img src="{{ asset('images/logo-soma.svg') }}" alt="SOMA Restaurant" width="191" height="57" />
            </a>
        </div>

        <div class="text-soma-green mb-16 text-center text-sm md:text-base">
            CARTA
        </div>

        <div class="mx-auto mb-8 grid max-w-lg gap-4 md:grid-cols-2 md:gap-8">
            @foreach ($menus as $menu)
                <div class="text-center">
                    <a href="{{ asset('storage/' . $menu->file_path) }}#toolbar=0" target="_blank"
                        class="text-soma-green border-soma-green block rounded border py-4 uppercase">
                        {{ strtoupper($menu->name) }}
                    </a>
                </div>
            @endforeach
        </div>

        <img src="{{ asset('images/ilustracion-carta.png') }}" alt="SOMA Restaurant" class="mx-auto" width="538"
            height="331" />
    </main>
@endsection
