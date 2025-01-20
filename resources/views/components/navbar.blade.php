<nav x-data="{ 
    isOpen: false,
    isScrolled: false,
    dropdownOpen: false 
}" 
@scroll.window="isScrolled = window.pageYOffset > 60"
class="fixed w-full z-50 transition-all duration-300"
:class="{ ' bg-gradient-to-b from-lime-400 to-green-600  to-75% shadow-lg': isScrolled, 'bg-transparent shadow': !isScrolled }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-auto">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center">
                  <img class=" h-24 w-auto py-3" src="{{ asset('images/logo_footer.jpg') }}" alt="Logo">
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-center space-x-6 font-semibold">
                    <a href="/" 
                       class="transition-colors duration-200" 
                       :class="{ 'text-white hover:text-gray-900': isScrolled, 'text-gray-900 hover:text-white': !isScrolled }">
                       BERANDA
                    </a>
                   
                    
                    
                      <div class="relative group">
                    <!-- Trigger -->
                    <button  class="transition-colors duration-200 inline-flex items-center"
                                :class="{ 'text-white hover:text-gray-900': isScrolled, 'text-gray-900 hover:text-white': !isScrolled }">
                           ANAK PERUSAHAAN</button>

                    <!-- Dropdown Menu -->
                    <div
                        class="absolute left-0 mt-2 w-60 bg-secondary shadow-lg text-gray-800 rounded-md border border-gray-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10"
                    >
                        <a href="https://www.groen-indonesia.com/home/" class="block px-4 py-2 hover:bg-slate-300">PT Groen Indonesia</a>
                        <a href="https://www.groen-indonesia.com/" class="block px-4 py-2 hover:bg-slate-300">PT Groen Manufaktur Indonesia</a>
                        <a href="https://sewatoilet.com/" class="block px-4 py-2 hover:bg-slate-300">PT Sewatoilet Indonesia</a>
                        <a href="https://reksoratan-indonesia.com/" class="block px-4 py-2 hover:bg-slate-300">PT Rekso Ratan Indonesia</a>
                        <a href="https://indradhanusa.com/" class="block px-4 py-2 hover:bg-slate-300">PT Indradhanusa Indonesia</a>
                    </div>
                    </div>
                    <a href="#tentang-kami" 
                       class="transition-colors duration-200" 
                       :class="{ 'text-white hover:text-gray-900': isScrolled, 'text-gray-900 hover:text-white': !isScrolled }">
                       TENTANG KAMI
                    </a>
                    <a href="#berita" 
                       class="transition-colors duration-200" 
                       :class="{ 'text-white hover:text-gray-900': isScrolled, 'text-gray-900 hover:text-white': !isScrolled }">
                       BERITA
                    </a>
                    <a href="#galeri" 
                       class="transition-colors duration-200" 
                       :class="{ 'text-white hover:text-gray-900': isScrolled, 'text-gray-900 hover:text-white': !isScrolled }">
                       GALERI
                    </a>
                    <a href="#mitra-kami" 
                       class="transition-colors duration-200" 
                       :class="{ 'text-white hover:text-gray-900': isScrolled, 'text-gray-900 hover:text-white': !isScrolled }">
                       MITRA KAMI
                    </a>
                    <a href="#hubungi-kami" 
                       class="transition-colors duration-200" 
                       :class="{ 'text-white hover:text-gray-900': isScrolled, 'text-gray-900 hover:text-white': !isScrolled }">
                       HUBUNGI KAMI
                    </a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button @click="isOpen = !isOpen" 
                        type="button" 
                        class="transition-colors duration-200 inline-flex items-center justify-center p-2 rounded-md focus:outline-none"
                        :class="{ 'text-white hover:text-gray-900': isScrolled, 'text-gray-900 hover:text-white': !isScrolled }">
                    <svg class="h-6 w-6" x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6" x-show="isOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="isOpen" class="md:hidden bg-white">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:text-gray-600 hover:bg-gray-50">BERANDA</a>
            
            <!-- Mobile Dropdown -->
            <div x-data="{ dropdownOpen: false }" class="relative">
                <button @click="dropdownOpen = !dropdownOpen" class="w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:text-gray-600 hover:bg-gray-50">
                    ANAK PERUSAHAAN
                    <svg class="inline-block ml-2 h-4 w-4" :class="{'rotate-180': dropdownOpen}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="dropdownOpen" class="pl-4">
                    <a href="https://www.groen-indonesia.com/home/" class="block px-4 py-2 hover:bg-slate-300">PT Groen Indonesia</a>
                        <a href="https://www.groen-indonesia.com/" class="block px-4 py-2 hover:bg-slate-300">PT Groen Manufaktur Indonesia</a>
                        <a href="https://sewatoilet.com/" class="block px-4 py-2 hover:bg-slate-300">PT Sewatoilet Indonesia</a>
                        <a href="https://reksoratan-indonesia.com/" class="block px-4 py-2 hover:bg-slate-300">PT Rekso Ratan Indonesia</a>
                        <a href="https://indradhanusa.com/" class="block px-4 py-2 hover:bg-slate-300">PT Indradhanusa Indonesia</a>
                   </div>
            </div>
            <a href="#tentang-kami" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:text-gray-600 hover:bg-gray-50">TENTANG KAMI</a>

            <a href="#berita" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:text-gray-600 hover:bg-gray-50">BERITA</a>
            <a href="#galeri" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:text-gray-600 hover:bg-gray-50">GALERI</a>
            <a href="#mitra-kami" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:text-gray-600 hover:bg-gray-50">MITRA KAMI</a>
            <a href="#hubungi-kami" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:text-gray-600 hover:bg-gray-50">HUBUNGI KAMI</a>
        </div>
    </div>
</nav>