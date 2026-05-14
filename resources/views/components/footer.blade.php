<footer class="bg-resort-green py-16 px-6 text-white border-t-4 border-resort-gold">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 lg:gap-8 items-start">

        <div class="text-center md:text-left md:col-span-2 lg:pr-12">
    <div class="flex items-center justify-center md:justify-start gap-5 mb-6">
        
        <div class="flex-shrink-0">
            <img src="{{ asset('assets/images/logo.png') }}" 
                 alt="Logo Green Resort" 
                 class="w-20 h-auto object-contain"> 
        </div>
        
        <h2 class="font-serif leading-[0.85] flex flex-col uppercase tracking-tighter text-left">
            <span class="text-5xl md:text-6xl font-black text-resort-gold italic">
                Green
            </span>
            <span class="text-2xl md:text-3xl font-bold text-white ml-1 tracking-[0.2em]">
                Resort
            </span>
        </h2>
    </div>

    <p class="text-gray-400 text-sm leading-relaxed mb-8">
        Membangun kehidupan yang lebih baik untuk masyarakat. Temukan bagaimana Green Resort Palembang bisa menjadi pilihan terbaik untuk Anda di kota Palembang.
    </p>

    <div class="flex items-center justify-center md:justify-start gap-4">
        <a href="https://www.facebook.com/share/1EMoH3JSAp/" class="group transition-all duration-300" aria-label="Facebook">
            <img src="{{ asset('assets/images/icons/facebook.png') }}" alt="Facebook" class="w-10 h-10 opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-all">
        </a>
        <a href="https://www.instagram.com/perumahangreenresort?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="group transition-all duration-300" aria-label="Instagram">
            <img src="{{ asset('assets/images/icons/instagram.png') }}" alt="Instagram" class="w-10 h-10 opacity-70 group-hover:opacity-100 group-hover:scale-110 transition-all">
        </a>
        <a href="https://www.tiktok.com/@perumahangreenresort?is_from_webapp=1&sender_device=pc" class="group transition-all duration-300" aria-label="TikTok">
            <img src="{{ asset('assets/images/icons/tiktok.png') }}" alt="TikTok" class="w-10 h-10 opacity-70 group-hover:opacity-100 group-hover:scale-110 transition-all">
        </a>
    </div>
</div>
        
        <div class="text-center md:text-left">
            <h4 class="font-semibold text-white uppercase tracking-widest text-sm mb-6 border-b border-resort-gold/30 pb-2 inline-block">Menu</h4>
            <div class="space-y-3">
                <a href="#" class="block text-gray-400 hover:text-resort-gold transition-colors text-sm">Homepage</a>
                <a href="#" class="block text-gray-400 hover:text-resort-gold transition-colors text-sm">About Us</a>
                <a href="#" class="block text-gray-400 hover:text-resort-gold transition-colors text-sm">Promo</a>
                <a href="#" class="block text-gray-400 hover:text-resort-gold transition-colors text-sm">News & Events</a>
                <a href="#" class="block text-gray-400 hover:text-resort-gold transition-colors text-sm">FAQ</a>
            </div>
        </div>

        <div class="text-center md:text-left">
            <h4 class="font-bold text-white uppercase tracking-widest text-sm mb-6 border-b border-resort-gold/30 pb-2 inline-block">Products</h4>
            <div class="space-y-3">
                @foreach($units as $unit)
                    <a href="{{ route('units.show', $unit->id) }}" class="block text-gray-400 hover:text-resort-gold uppercase font-medium transition-colors text-sm">
                        {{ $unit->nama_tipe }}
                    </a>
                @endforeach
            </div>
        </div>
        
        <div class="text-center md:text-left">
            <h4 class="font-semibold text-white uppercase tracking-widest text-sm mb-6 border-b border-resort-gold/30 pb-2 inline-block">Contacts</h4>
            <div class="space-y-3 text-gray-400 text-sm">
                <p class="hover:text-resort-gold transition-colors cursor-pointer flex items-center justify-center md:justify-start gap-2">
                    <span>info@greenresortpalembang.com</span>
                </p>
                <p class="hover:text-resort-gold transition-colors cursor-pointer font-bold">
                    +62821 7887 8998
                </p>
            </div>
        </div>
    </div>
    
    <div class="max-w-7xl mx-auto mt-16 pt-8 border-t border-white/10 text-center text-gray-400 text-[10px] tracking-widest ">
        <p>copyright &copy; {{ date('Y') }} <span class="text-bold text-white">Green Resort Palembang</span> | All rights reserved.</p>
        <p>Develop By <span class="text-bold text-white uppercase">PT. Bintang Agung Property</span></p>
    </div>
</footer>