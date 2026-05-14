<nav x-data="{ mobileMenuOpen: false }" class="fixed top-0 w-full z-50 px-6 md:px-12 py-5 flex justify-between items-center text-white bg-black/40 backdrop-blur-md border-b border-white/10">
    
    <a href="/" class="flex items-center gap-3 group">
        <img src="{{ asset('assets/images/logo2.png') }}" alt="Logo" class="w-20 h-auto transition-transform group-hover:scale-105">
        <div class="flex flex-col leading-tight font-serif uppercase">
            <span class="text-xl font-black tracking-tighter text-white">Green Resort</span>
            <span class="text-[13px] font-bold text-resort-gold tracking-[0.3em] -mt-1 text-center">Palembang</span>
        </div>
    </a>
    
    <div class="hidden lg:flex gap-12 text-[11px] font-bold uppercase tracking-[0.2em] items-center">
        <a href="/" class="relative group transition duration-300 hover:text-resort-gold">
            Home
            <span class="absolute -bottom-2 left-0 h-[2px] bg-resort-gold transition-all duration-300 {{ request()->is('/') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
        </a>

        <a href="{{ route('about') }}" class="relative group transition duration-300 hover:text-resort-gold">
            About Us
            <span class="absolute -bottom-2 left-0 h-[2px] bg-resort-gold transition-all duration-300 {{ request()->routeIs('about') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
        </a>

        <a href="{{ route('promo') }}" class="relative group transition duration-300 hover:text-resort-gold">
            Promo
            <span class="absolute -bottom-2 left-0 w-0 h-[2px] bg-resort-gold transition-all duration-300 group-hover:w-full"></span>
        </a>

        <a href="{{ route('berita') }}" class="relative group transition duration-300 hover:text-resort-gold">
            Berita
            <span class="absolute -bottom-2 left-0 w-0 h-[2px] bg-resort-gold transition-all duration-300 group-hover:w-full"></span>
        </a>

        <div class="relative" x-data="{ dropdownOpen: false }" @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false">
            <button class="relative group transition duration-300 hover:text-resort-gold focus:outline-none uppercase">
                Estate
                <span class="absolute -bottom-2 left-0 w-0 h-[2px] bg-resort-gold transition-all duration-300 group-hover:w-full"></span>
            </button>

            <div x-show="dropdownOpen"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 translate-y-3"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 translate-y-3"
                 class="absolute left-1/2 -translate-x-1/2 top-full mt-6 w-25 bg-white shadow-xl border-t-2 border-resort-gold rounded-b-sm overflow-hidden text-gray-900"
                 style="display: none;">
                <a href="{{ route('gallery') }}" class="block px-5 py-4 hover:bg-gray-50 hover:text-resort-gold transition-colors duration-300 text-center">Gallery</a>
                <a href="#" class="block px-5 py-4 hover:bg-gray-50 hover:text-resort-gold transition-colors duration-300 border-t border-gray-100 text-center">Master Plan</a>
            </div>
        </div>
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

            <a href="{{ route('promo') }}" class="px-8 py-5 text-[14px] font-bold text-gray-900 uppercase tracking-[0.1em] hover:bg-gray-50 border-b border-gray-300 transition-all">
                Promo
            </a>

            <a href="{{ route('berita') }}" class="px-8 py-5 text-[14px] font-bold text-gray-900 uppercase tracking-[0.1em] hover:bg-gray-50 border-b border-gray-300 transition-all">
                Berita
            </a>
            
            <div x-data="{ estateOpen: false }">
                <button @click="estateOpen = !estateOpen" class="w-full text-left px-8 py-5 text-[14px] font-bold text-gray-900 uppercase tracking-[0.1em] hover:bg-gray-50 transition-all focus:outline-none">
                    Estate
                </button>
                <div x-show="estateOpen" class="bg-gray-50 flex flex-col border-t border-gray-200">
                    <a href="{{ route('gallery') }}" class="px-12 py-4 text-[12px] font-bold text-gray-600 uppercase tracking-[0.1em] hover:text-resort-gold transition-all">Gallery</a>
                    <a href="#" class="px-12 py-4 text-[12px] font-bold text-gray-600 uppercase tracking-[0.1em] hover:text-resort-gold transition-all border-t border-gray-200">Master Plan</a>
                </div>
            </div>
        </div>
    </div>
</nav>