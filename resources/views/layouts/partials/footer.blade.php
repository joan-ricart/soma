<div class="relative py-8 text-center">
    <div class="absolute left-0 right-0 top-1/2 z-[1] h-[1px] bg-[#224567]"></div>
    <div class="relative z-[2] inline-block bg-white px-4">
        <a href="https://soma-restaurant.com" target="_blank">
            <img src="{{ asset('images/grup-soma-footer.png') }}" alt="GRUP SOMA - SOMA - BRUMA" width="298"
                height="28" />
        </a>
    </div>
</div>

<div class="bg-soma-green sticky bottom-0 z-20 flex h-10 items-center justify-center text-center">
    <a href="https://maps.app.goo.gl/xEHBYpXnG6fr5WSU9" target="_blank" class="text-sm uppercase text-white underline">
        C/ Provença 179, Barcelona
    </a>
</div>

<footer class="relative z-20">
    <nav class="bg-soma-lightgreen flex items-center md:h-10">
        <div
            class="text-soma-green w-full px-4 py-3 uppercase max-md:text-center md:flex md:items-center md:justify-between">
            <div class="text-sm max-md:pb-1.5">
                <a href="tel:605658956" class="max-md:block max-md:pb-1.5">605.658.956</a>
                <span class="max-md:hidden">-</span>
                <a href="mailto:reserves@soma-restaurant.com">reserves@soma-restaurant.com</a>
            </div>
            <div class="text-xs max-md:pt-1.5">
                <span>SOMA&copy; {{ date('Y') }}</span>
                ·
                <a href="{{ route('privacy') }}" target="_blank" class="text-soma-green underline"><span
                        class="max-md:hidden">POLITICA DE</span> PRIVACIDAD</a>
                -
                <a href="{{ route('accessibility') }}" target="_blank"
                    class="text-soma-green underline">ACCESIBILIDAD</a>
            </div>
        </div>
    </nav>
</footer>
