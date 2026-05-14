<!-- resources/views/components/navbar.blade.php -->
<nav x-data="{ mobileMenuOpen: false }" class="fixed top-0 w-full z-50 px-6 md:px-12 py-5 flex justify-between items-center text-white bg-black/40 backdrop-blur-md border-b border-white/10">
    
    <!-- Logo & Brand -->
    <a href="/" class="flex items-center gap-3 group">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="w-10 h-auto transition-transform group-hover:scale-105">
        <div class="flex flex-col leading-tight font-serif uppercase">
            <span class="text-xl font-black tracking-tighter text-white">Green</span>
            <span class="text-[10px] font-bold text-resort-gold tracking-[0.3em] -mt-1">Resort</span>
        </div>
    </a>
    
    <!-- Desktop Menu -->
    <div class="hidden lg:flex gap-12 text-[11px] font-bold uppercase tracking-[0.2em]">
        <!-- Home -->
        <a href="/" class="relative group transition duration-300 hover:text-resort-gold">
            Home
            <span class="absolute -bottom-2 left-0 h-[2px] bg-resort-gold transition-all duration-300 {{ request()->is('/') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
        </a>

        <!-- About Us -->
        <a href="{{ route('about') }}" class="relative group transition duration-300 hover:text-resort-gold">
            About Us
            <span class="absolute -bottom-2 left-0 h-[2px] bg-resort-gold transition-all duration-300 {{ request()->routeIs('about') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
        </a>

        <!-- Estate / Residential -->
        <a href="#" class="relative group transition duration-300 hover:text-resort-gold">
            Estate
            <span class="absolute -bottom-2 left-0 w-0 h-[2px] bg-resort-gold transition-all duration-300 group-hover:w-full"></span>
        </a>

        <!-- Promo -->
        <a href="#" class="relative group transition duration-300 hover:text-resort-gold">
            Promo
            <span class="absolute -bottom-2 left-0 w-0 h-[2px] bg-resort-gold transition-all duration-300 group-hover:w-full"></span>
        </a>

        <!-- Berita -->
        <a href="#" class="relative group transition duration-300 hover:text-resort-gold">
            Berita
            <span class="absolute -bottom-2 left-0 w-0 h-[2px] bg-resort-gold transition-all duration-300 group-hover:w-full"></span>
        </a>
    </div>

    <!-- Mobile Hamburger -->
    <div class="lg:hidden flex items-center">
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="group focus:outline-none">
            <div class="space-y-1.5">
                <span :class="mobileMenuOpen ? 'rotate-45 translate-y-2' : ''" class="block w-8 h-0.5 bg-white transition-all duration-300"></span>
                <span :class="mobileMenuOpen ? 'opacity-0' : ''" class="block w-8 h-0.5 bg-white transition-all duration-300"></span>
                <span :class="mobileMenuOpen ? '-rotate-45 -translate-y-2' : ''" class="block w-8 h-0.5 bg-white transition-all duration-300"></span>
            </div>
        </button>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-5"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-5"
         @click.away="mobileMenuOpen = false"
         class="absolute top-full left-0 w-full bg-white shadow-2xl lg:hidden overflow-hidden border-t-4 border-resort-gold">
        <div class="flex flex-col">
            <a href="/" class="px-8 py-5 text-[14px] font-bold uppercase tracking-[0.1em] border-b border-gray-300 transition-all {{ request()->is('/') ? 'bg-gray-50 text-resort-gold' : 'text-gray-900 hover:bg-gray-50' }}">
                Home
            </a>
            <a href="{{ route('about') }}" class="px-8 py-5 text-[14px] font-bold uppercase tracking-[0.1em] border-b border-gray-300 transition-all {{ request()->routeIs('about') ? 'bg-gray-50 text-resort-gold' : 'text-gray-900 hover:bg-gray-50' }}">
                About Us
            </a>
            <a href="#" class="px-8 py-5 text-[14px] font-bold text-gray-900 uppercase tracking-[0.1em] hover:bg-gray-50 border-b border-gray-300 transition-all">
                Estate
            </a>
            <a href="#" class="px-8 py-5 text-[14px] font-bold text-gray-900 uppercase tracking-[0.1em] hover:bg-gray-50 border-b border-gray-300 transition-all">
                Promo
            </a>
            <a href="#" class="px-8 py-5 text-[14px] font-bold text-gray-900 uppercase tracking-[0.1em] hover:bg-gray-50 transition-all">
                Berita
            </a>
        </div>
    </div>
</nav>