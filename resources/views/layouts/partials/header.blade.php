<header class="fixed left-0 right-0 top-0 z-30 flex h-10 w-full items-center px-4 transition-colors"
    :class="menuExpanded ? 'bg-soma-green text-white' : 'text-soma-green'">
    <nav class="grid w-full grid-cols-2 items-center gap-4 text-sm 2xl:container md:grid-cols-3 md:text-base">
        <div class="">
            <a x-show="menuExpanded" href="{{ route('home') }}">
                <img src="{{ asset('images/logo-soma-white.svg') }}" alt="Logo SOMA Restaurant" class=""
                    width="73" height="22">
            </a>
        </div>
        <div class="text-center max-md:hidden">

        </div>
        <div class="text-right">
            <nav class="flex items-center justify-end gap-4">
                <a x-cloak x-show="menuExpanded || true" href="{{ route('book_es') }}"
                    class="uppercase underline">Reserva</a>
                <a x-cloak x-show="menuExpanded || true" href="{{ route('menu') }}"
                    class="uppercase underline">Carta</a>
            </nav>
        </div>
    </nav>
</header>
