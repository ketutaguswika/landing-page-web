<!-- resources/views/sections/stats.blade.php -->
<section class="bg-resort-green py-20 px-6 text-white text-center relative overflow-hidden">
    <div class="max-w-6xl mx-auto relative z-10">
        <h2 class="text-resort-gold uppercase tracking-[0.3em] text-xs font-bold mb-4">The Developer</h2>
        <h3 class="text-3xl md:text-5xl font-serif font-black mb-12 italic">Why Choose Green Resort?</h3>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="flex flex-col items-center" x-data="{ count: 0 }" x-init="let timer = setInterval(() => { if (count < 20) count++; else clearInterval(timer); }, 50)">
                <span class="text-4xl md:text-6xl font-serif font-black text-resort-gold mb-2" x-text="count + '+'">0+</span>
                <span class="text-[10px] uppercase tracking-[0.2em] text-gray-300 font-bold">Projects</span>
            </div>
            <div class="flex flex-col items-center border-l border-white/10" x-data="{ count: 0 }" x-init="let timer = setInterval(() => { if (count < 30) count++; else clearInterval(timer); }, 30)">
                <span class="text-4xl md:text-6xl font-serif font-black text-resort-gold mb-2" x-text="count + '+'">0+</span>
                <span class="text-[10px] uppercase tracking-[0.2em] text-gray-300 font-bold">Cities</span>
            </div>
            <div class="flex flex-col items-center border-l border-white/10" x-data="{ count: 0 }" x-init="let timer = setInterval(() => { if (count < 80) count++; else clearInterval(timer); }, 15)">
                <span class="text-4xl md:text-6xl font-serif font-black text-resort-gold mb-2" x-text="count">0</span>
                <span class="text-[10px] uppercase tracking-[0.2em] text-gray-300 font-bold">Awards</span>
            </div>
            <div class="flex flex-col items-center border-l border-white/10" x-data="{ count: 0 }" x-init="let timer = setInterval(() => { if (count < 5) count++; else clearInterval(timer); }, 200)">
                <span class="text-4xl md:text-6xl font-serif font-black text-resort-gold mb-2" x-text="count + '+'">0+</span>
                <span class="text-[10px] uppercase tracking-[0.2em] text-gray-300 font-bold">Experience</span>
            </div>
        </div>
    </div>
</section>