<section class="py-20 bg-gray-50 border-y border-gray-200">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-serif font-bold text-[#1e293b] mb-12">News & Events</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
            <div class="bg-white rounded-md shadow-sm overflow-hidden hover:shadow-lg transition-shadow border border-gray-100 group">
                <div class="overflow-hidden h-48">
                    <img src="{{ asset('assets/images/news/news1.jpg') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="News 1">
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-lg mb-3 text-gray-900 leading-snug hover:text-resort-green cursor-pointer">SHM Adalah Kunci Kepemilikan Properti Yang Aman, Ini Penjelasannya!</h3>
                    <p class="text-gray-600 text-sm mb-6 line-clamp-3">Sertifikat Hak Milik (SHM) adalah bukti kepemilikan paling kuat atas suatu tanah atau properti. Pelajari mengapa ini penting untuk masa depan aset Anda...</p>
                    <a href="#" class="text-xs font-bold text-resort-green uppercase tracking-wider hover:underline">Read More »</a>
                </div>
            </div>

            <div class="bg-white rounded-md shadow-sm overflow-hidden hover:shadow-lg transition-shadow border border-gray-100 group">
                <div class="overflow-hidden h-48">
                    <img src="{{ asset('assets/images/news/news2.jpg') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="News 2">
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-lg mb-3 text-gray-900 leading-snug hover:text-resort-green cursor-pointer">11 Warna Keramik Kamar Mandi Yang Bagus, Elegan, dan Fresh</h3>
                    <p class="text-gray-600 text-sm mb-6 line-clamp-3">Pemilihan warna keramik kamar mandi sangat penting untuk menciptakan suasana yang nyaman, bersih, dan sesuai dengan tema modern hunian Anda...</p>
                    <a href="#" class="text-xs font-bold text-resort-green uppercase tracking-wider hover:underline">Read More »</a>
                </div>
            </div>

            <div class="bg-white rounded-md shadow-sm overflow-hidden hover:shadow-lg transition-shadow border border-gray-100 group">
                <div class="overflow-hidden h-48">
                    <img src="{{ asset('assets/images/news/news3.jpg') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="News 3">
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-lg mb-3 text-gray-900 leading-snug hover:text-resort-green cursor-pointer">15 Model Jendela Minimalis Yang Cantik dan Fungsional</h3>
                    <p class="text-gray-600 text-sm mb-6 line-clamp-3">Desain jendela rumah sangat mempengaruhi estetika sirkulasi udara dan pencahayaan alami di dalam ruangan. Berikut inspirasi terbaik untuk Anda...</p>
                    <a href="#" class="text-xs font-bold text-resort-green uppercase tracking-wider hover:underline">Read More »</a>
                </div>
            </div>
        </div>
        
        <div class="mt-12">
            <a href="{{ route('berita') }}" class="inline-block bg-[#0f172a] text-white px-12 py-4 rounded-lg font-semibold hover:bg-resort-green transition-colors duration-300 shadow-lg tracking-wide">
                LIHAT SEMUA BERITA
            </a>
        </div>
    </div>
</section>