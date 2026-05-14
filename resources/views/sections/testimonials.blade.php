<!-- resources/views/components/testimonials.blade.php -->
<section class="relative py-32 bg-gray-900 overflow-hidden group" 
    x-data="{ 
        autoplay: null,
        activeSlide: 0,
        slideCount: 3,
        init() {
            this.startAutoplay();
            this.$refs.scrcl.addEventListener('scroll', () => {
                let container = this.$refs.scrcl;
                let maxScroll = container.scrollWidth - container.clientWidth;
                let scrollPercentage = container.scrollLeft / maxScroll;
                this.activeSlide = Math.round(scrollPercentage * (this.slideCount - 1));
            });
        },
        startAutoplay() {
            this.autoplay = setInterval(() => { this.next(); }, 5000);
        },
        stopAutoplay() { clearInterval(this.autoplay); },
        next() {
            let container = this.$refs.scrcl;
            if (container.scrollLeft + container.clientWidth >= container.scrollWidth - 20) {
                this.to(0);
            } else {
                this.to(container.scrollLeft + container.clientWidth);
            }
        },
        prev() {
            let container = this.$refs.scrcl;
            if (container.scrollLeft <= 0) {
                this.to(container.scrollWidth);
            } else {
                this.to(container.scrollLeft - container.clientWidth);
            }
        },
        to(position) {
            this.$refs.scrcl.scrollTo({ left: position, behavior: 'smooth' });
        },
        scrollToIndex(index) {
            let container = this.$refs.scrcl;
            let target = (container.scrollWidth - container.clientWidth) * (index / (this.slideCount - 1));
            this.to(target);
        }
    }"
    @mouseenter="stopAutoplay()" 
    @mouseleave="startAutoplay()">

    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" class="w-full h-full object-cover" alt="Resort Background">
        <div class="absolute inset-0 bg-black/75 backdrop-blur-[2px]"></div>
    </div>

    <div class="relative z-10 max-w-5xl mx-auto px-6">
        
        <!-- Navigation Arrows -->
        <button @click="prev()" class="absolute left-4 md:-left-16 top-1/2 -translate-y-1/2 w-14 h-14 rounded-full border border-white/20 flex items-center justify-center text-white hover:bg-white hover:text-black transition-all duration-500 z-20 focus:outline-none">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
        </button>

        <button @click="next()" class="absolute right-4 md:-right-16 top-1/2 -translate-y-1/2 w-14 h-14 rounded-full border border-white/20 flex items-center justify-center text-white hover:bg-white hover:text-black transition-all duration-500 z-20 focus:outline-none">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </button>

        <div 
            x-ref="scrcl"
            class="flex overflow-x-auto snap-x snap-mandatory scrollbar-hide pb-4"
            style="scrollbar-width: none; -ms-overflow-style: none;"
        >
            <!-- Card 1 -->
            <div class="min-w-full snap-center flex flex-col items-center text-center px-4">
                <div class="relative w-28 h-28 mb-8">
                    <div class="absolute inset-0 rounded-full border border-resort-gold scale-125 opacity-50"></div>
                    <div class="relative w-full h-full rounded-full border-4 border-white shadow-2xl overflow-hidden z-10">
                        <img src="{{ asset('assets/images/testimonials/wika.jpg') }}" class="w-full h-full object-cover" alt="Wika">
                    </div>
                </div>
                <h4 class="text-white text-2xl font-serif font-black tracking-tight uppercase italic">Wika</h4>
                <p class="text-resort-gold text-[10px] uppercase tracking-[0.4em] mb-8 font-bold">Resident / Pengusaha</p>
                <p class="text-gray-200 text-lg md:text-xl leading-relaxed italic max-w-3xl font-light">
                    "Tinggal di Green Resort memberikan ketenangan tersendiri. Keamanannya 24 jam dan lingkungannya sangat terawat. Keputusan investasi terbaik keluarga kami."
                </p>
            </div>

            <!-- Card 2 -->
            <div class="min-w-full snap-center flex flex-col items-center text-center px-4">
                <div class="relative w-28 h-28 mb-8">
                    <div class="absolute inset-0 rounded-full border border-resort-gold scale-125 opacity-50"></div>
                    <div class="relative w-full h-full rounded-full border-4 border-white shadow-2xl overflow-hidden z-10">
                        <img src="{{ asset('assets/images/testimonials/egi.jpg') }}" class="w-full h-full object-cover" alt="Sanjaya">
                    </div>
                </div>
                <h4 class="text-white text-2xl font-serif font-black tracking-tight uppercase italic">Sanjaya</h4>
                <p class="text-resort-gold text-[10px] uppercase tracking-[0.4em] mb-8 font-bold">Resident / Dokter Spesialis Reproduksi</p>
                <p class="text-gray-200 text-lg md:text-xl leading-relaxed italic max-w-3xl font-light">
                    "Fasilitas lengkap dan dekat akses jalan utama. Sangat memudahkan mobilitas saya yang sering bertugas ke luar kota. Harga sepadan dengan kualitas."
                </p>
            </div>

            <!-- Card 3 -->
            <div class="min-w-full snap-center flex flex-col items-center text-center px-4">
                <div class="relative w-28 h-28 mb-8">
                    <div class="absolute inset-0 rounded-full border border-resort-gold scale-125 opacity-50"></div>
                    <div class="relative w-full h-full rounded-full border-4 border-white shadow-2xl overflow-hidden z-10">
                        <img src="{{ asset('assets/images/testimonials/habibi.jpg') }}" class="w-full h-full object-cover" alt="Habibi">
                    </div>
                </div>
                <h4 class="text-white text-2xl font-serif font-black tracking-tight uppercase italic">Raka Habibi</h4>
                <p class="text-resort-gold text-[10px] uppercase tracking-[0.4em] mb-8 font-bold">Resident / Karyawan BUMN</p>
                <p class="text-gray-200 text-lg md:text-xl leading-relaxed italic max-w-3xl font-light">
                    "Proses KPR sangat dibantu oleh tim developer sampai tembus. Legalitasnya jelas, terjamin, dan serah terima kunci tepat waktu sesuai janji."
                </p>
            </div>

            <div class="min-w-full snap-center flex flex-col items-center text-center px-4">
                <div class="relative w-28 h-28 mb-8">
                    <div class="absolute inset-0 rounded-full border border-resort-gold scale-125 opacity-50"></div>
                    <div class="relative w-full h-full rounded-full border-4 border-white shadow-2xl overflow-hidden z-10">
                        <img src="{{ asset('assets/images/testimonials/alex.jpg') }}" class="w-full h-full object-cover" alt="Testimonial Placeholder">
                    </div>
                </div>
                <h4 class="text-white text-2xl font-serif font-black tracking-tight uppercase italic">Alex</h4>
                <p class="text-resort-gold text-[10px] uppercase tracking-[0.4em] mb-8 font-bold">Mekanik Honda</p>
                <p class="text-gray-200 text-lg md:text-xl leading-relaxed italic max-w-3xl font-light">
                    "Lokasi strategis dan fasilitas yang lengkap membuat saya merasa nyaman tinggal di sini. Pelayanan pelanggan juga sangat memuaskan."
                </p>
            </div>

        </div>

        <!-- Pagination Dots -->
        <div class="flex justify-center gap-3 mt-12">
            <template x-for="(i, index) in slideCount">
                <button 
                    @click="scrollToIndex(index)"
                    :class="activeSlide === index ? 'bg-resort-gold w-10' : 'bg-white/20 w-2.5'"
                    class="h-2 rounded-full transition-all duration-700 ease-out focus:outline-none cursor-pointer"
                ></button>
            </template>
        </div>
    </div>
</section>