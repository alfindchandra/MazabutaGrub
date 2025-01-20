<section id="galeri">
    <div class="container mx-auto">
        <div class="text-center mb-4">
            <ul class="filters flex flex-col md:flex-row justify-center">
                <li class="category-btn active text-gray-900 border border-slate-300 hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800"><a data-filter="*" href="#!" onclick="filterImages('*')">All</a></li>
                <li class="category-btn text-gray-900 border border-slate-300 hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800"><a data-filter=".pt-groen-indonesia" href="#!" onclick="filterImages('.pt-groen-indonesia')">PT GROEN INDONESIA</a></li>
                <li class="category-btn text-gray-900 border border-slate-300 hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800"><a data-filter=".pt-sewatoilet-indonesia" href="#!" onclick="filterImages('.pt-sewatoilet-indonesia')">PT SEWATOILET INDONESIA</a></li>
                <li class="category-btn text-gray-900 border border-slate-300 hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800"><a data-filter=".pt-indradhanusa-indonesia" href="#!" onclick="filterImages('.pt-indradhanusa-indonesia')">PT INDRADHANUSA INDONESIA</a></li>
            </ul>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-1 gallery">
            <div class="grid-item gallery-box-img pt-groen-indonesia">
                <a data-fancybox="gallery" data-caption="Image1" href="https://www.mazabuta.com/assets/gallery/24042019/mazabuta_knjna_1.jpg">
                    <img class="max-w-full transition-all duration-300 rounded-lg blur-sm hover:blur-none" src="https://www.mazabuta.com/assets/gallery/24042019/mazabuta_knjna_1.jpg">
                </a>
            </div>
            <div class="grid-item gallery-box-img pt-sewatoilet-indonesia">
                <a data-fancybox="gallery" data-caption="Image2" href="https://www.mazabuta.com/assets/gallery/24042019/mazabuta_qzhsv_9.jpg">
                    <img class="max-w-full transition-all duration-300 rounded-lg  blur-sm hover:blur-none" src="https://www.mazabuta.com/assets/gallery/24042019/mazabuta_qzhsv_9.jpg">
                </a>
            </div>
            <div class="grid-item gallery-box-img pt-indradhanusa-indonesia">
                <a data-fancybox="gallery" data-caption="Image3" href="https://www.mazabuta.com/assets/gallery/24042019/mazabuta_56pul_13.jpg">
                    <img class="max-w-full transition-all duration-300 rounded-lg  blur-sm hover:blur-none" src="https://www.mazabuta.com/assets/gallery/24042019/mazabuta_56pul_13.jpg">
                </a>
            </div>
            <div class="grid-item gallery-box-img pt-groen-indonesia">
                <a data-fancybox="gallery" data-caption="Image4" href="https://www.mazabuta.com/assets/gallery/24042019/mazabuta_qjzwx_2.jpg">
                    <img class="max-w-full transition-all duration-300 rounded-lg  blur-sm hover:blur-none" src="https://www.mazabuta.com/assets/gallery/24042019/mazabuta_qjzwx_2.jpg">
                </a>
            </div>
            <div class="grid-item gallery-box-img pt-sewatoilet-indonesia">
                <a data-fancybox="gallery" data-caption="Image5" href="https://www.mazabuta.com/assets/gallery/24042019/mazabuta_d2fcn_10.jpg">
                    <img class="max-w-full transition-all duration-300 rounded-lg  blur-sm hover:blur-none" src="https://www.mazabuta.com/assets/gallery/24042019/mazabuta_d2fcn_10.jpg">
                </a>
            </div>
            <div class="grid-item gallery-box-img pt-groen-indonesia">
                <a data-fancybox="gallery" data-caption="Image6" href="https://www.mazabuta.com/assets/gallery/24042019/mazabuta_zgzjk_4.jpg">
                    <img class="max-w-full transition-all duration-300 rounded-lg  blur-sm hover:blur-none" src="https://www.mazabuta.com/assets/gallery/24042019/mazabuta_zgzjk_4.jpg">
                </a>
            </div>
            <div class="grid-item gallery-box-img pt-sewatoilet-indonesia">
                <a data-fancybox="gallery" data-caption="Image7" href="https://www.mazabuta.com/assets/gallery/19082019/mazabuta_skptk_19.jpg">
                    <img class="max-w-full transition-all duration-300 rounded-lg  blur-sm hover:blur-none" src="https://www.mazabuta.com/assets/gallery/19082019/mazabuta_skptk_19.jpg">
                </a>
            </div>
            <div class="grid-item gallery-box-img pt-indradhanusa-indonesia">
                <a data-fancybox="gallery" data-caption="Image8" href="https://www.mazabuta.com/assets/gallery/24042019/mazabuta_dggjl_15.jpg">
                    <img class="max-w-full transition-all duration-300 rounded-lg  blur-sm hover:blur-none" src="https://www.mazabuta.com/assets/gallery/24042019/mazabuta_dggjl_15.jpg">
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    function filterImages(category) {
        const items = document.querySelectorAll('.grid-item');
        const buttons = document.querySelectorAll('.category-btn');

        items.forEach(item => {
            if (category === '*' || item.classList.contains(category.substring(1))) {
                item.classList.remove('hidden');
            } else {
                item.classList.add('hidden');
            }
        });

        buttons.forEach(button => {
            const filterValue = button.querySelector('a').getAttribute('data-filter');
            if (filterValue === category) {
                button.classList.add('active');
            } else {
                button.classList.remove('active');
            }
        });
    }
</script>
