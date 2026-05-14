<section class="relative">
    <div class="relative h-[85vh] min-h-[600px] w-full">
        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" class="w-full h-full object-cover" alt="Green Resort Palembang">
        <div class="absolute inset-0 bg-black/50"></div> 
        
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-4 pb-64 md:pb-40">
            <h2 class="text-4xl md:text-7xl font-serif font-black leading-tight uppercase italic tracking-tighter">
                Green Resort <span class="text-resort-gold not-italic">Palembang</span>
            </h2>
            <p class="mt-4 text-sm md:text-xl tracking-[0.2em] uppercase font-light">Exclusive Living Experience</p>
        </div>
    </div>

    <div class="absolute left-0 right-0 -bottom-80 md:-bottom-32 z-20 px-4">
        <div class="max-w-6xl mx-auto bg-white p-6 md:p-12 shadow-[0_20px_50px_rgba(0,0,0,0.3)] border-t-8 border-resort-gold">
            <div class="text-center mb-10">
                <h3 class="text-gray-900 text-xl md:text-3xl font-serif font-bold uppercase tracking-widest">Dapatkan Penawaran Eksklusif</h3>
                <div class="w-16 h-1 bg-resort-gold mx-auto mt-4"></div>
            </div>
            
            <form action="#" method="POST" class="space-y-6 md:space-y-8">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
                    
                    <div class="relative">
                        <input type="text" name="nama" id="nama" placeholder=" " required
                            class="block px-4 py-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-resort-gold peer">
                        <label for="nama" 
                            class="absolute text-xs md:text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-resort-gold peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-3 font-bold uppercase tracking-wider">
                            Nama Lengkap
                        </label>
                    </div>

                    <div class="relative">
                        <input type="email" name="email" id="email" placeholder=" " required
                            class="block px-4 py-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-resort-gold peer">
                        <label for="email" 
                            class="absolute text-xs md:text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-resort-gold peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-3 font-bold uppercase tracking-wider">
                            Email
                        </label>
                    </div>

                    <div class="relative">
                        <input type="tel" name="whatsapp" id="whatsapp" placeholder=" " required
                            class="block px-4 py-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-resort-gold peer">
                        <label for="whatsapp" 
                            class="absolute text-xs md:text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-resort-gold peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-3 font-bold uppercase tracking-wider">
                            Whatsapp
                        </label>
                    </div>

                    <div class="relative">
                        <input type="text" name="kota" id="kota" placeholder="Domisili " required
                            class="block px-4 py-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-resort-gold peer">
                        <label for="kota" 
                            class="absolute text-xs md:text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-resort-gold peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-3 font-bold uppercase tracking-wider">
                            Domisili
                        </label>
                    </div>

                </div>
                
                <div class="flex justify-center pt-2">
                    <button type="submit" class="w-full md:w-auto px-20 py-4 bg-resort-green text-white font-black uppercase tracking-[0.4em] text-[10px] md:text-xs transition-all duration-500 hover:bg-resort-gold hover:text-resort-green shadow-xl active:scale-95">
                        Download Brosur
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<div class="h-[500px] md:h-64"></div>