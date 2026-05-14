<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button class="px-6 py-2 bg-gray-900 text-white text-xs font-bold uppercase tracking-widest rounded-full">All</button>
            <button class="px-6 py-2 bg-white text-gray-500 border border-gray-200 text-xs font-bold uppercase tracking-widest rounded-full hover:border-resort-gold hover:text-resort-gold transition-colors">Eksterior</button>
            <button class="px-6 py-2 bg-white text-gray-500 border border-gray-200 text-xs font-bold uppercase tracking-widest rounded-full hover:border-resort-gold hover:text-resort-gold transition-colors">Interior</button>
            <button class="px-6 py-2 bg-white text-gray-500 border border-gray-200 text-xs font-bold uppercase tracking-widest rounded-full hover:border-resort-gold hover:text-resort-gold transition-colors">Fasilitas</button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 auto-rows-[250px] md:auto-rows-[320px]">
            
            <div class="group relative overflow-hidden rounded-lg col-span-1 cursor-pointer">
                <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Gallery">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <span class="text-white border border-white px-4 py-2 text-xs uppercase tracking-widest font-bold">View</span>
                </div>
            </div>
            
            <div class="group relative overflow-hidden rounded-lg md:col-span-2 cursor-pointer">
                <img src="{{ asset('assets/images/The-Aston.jpg') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Gallery">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <span class="text-white border border-white px-4 py-2 text-xs uppercase tracking-widest font-bold">View</span>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-lg col-span-1 cursor-pointer">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Gallery">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <span class="text-white border border-white px-4 py-2 text-xs uppercase tracking-widest font-bold">View</span>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-lg col-span-1 cursor-pointer">
                <img src="{{ asset('assets/images/Capela.jpg') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Gallery">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <span class="text-white border border-white px-4 py-2 text-xs uppercase tracking-widest font-bold">View</span>
                </div>
            </div>
            
            <div class="group relative overflow-hidden rounded-lg col-span-1 cursor-pointer">
                <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Gallery">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <span class="text-white border border-white px-4 py-2 text-xs uppercase tracking-widest font-bold">View</span>
                </div>
            </div>
        </div>
    </div>
</section>