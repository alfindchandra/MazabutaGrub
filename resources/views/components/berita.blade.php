<div class="min-h-screen bg-gray-50 py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-900 mb-8">Berita Terkini</h1>
        </div>

        <div id="news-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($news as $item)
                <article class="news-item bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300" data-id="{{ $item['id'] }}">
                    <div class="relative h-72 w-full overflow-hidden">
                        <a href="{{ $item['image'] }}">
                            <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"/>
                        </a>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            {{ date('d M Y', strtotime($item['created_at'])) }}
                            <span class="mx-2">•</span>
                            <span>{{ $item['author'] }}</span>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-900 mb-3">
                            {{ $item['title'] }}
                        </h2>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            {{ $item['excerpt'] }}
                        </p>
                        <a href="{{ route('news.show', $item['id']) }}" class="inline-flex items-center text-green-600 hover:text-green-700">
                            Baca Selengkapnya
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-12 flex justify-center">
            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px">
                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50" onclick="changePage(-1)">
                    <span class="sr-only">Previous</span>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
                <span id="page-numbers"></span>
                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50" onclick="changePage(1)">
                    <span class="sr-only">Next</span>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            </nav>
        </div>
    </div>
</div>

<script>
    let currentPage = 1;
    const itemsPerPage = 3;
    const items = document.querySelectorAll('.news-item');
    const totalPages = Math.ceil(items.length / itemsPerPage);

    function showPage(page) {
        items.forEach((item, index) => {
            item.style.display = Math.floor(index / itemsPerPage) + 1 === page ? 'block' : 'none';
        });
        updatePagination();
    }

    function changePage(direction) {
        currentPage = Math.max(1, Math.min(currentPage + direction, totalPages));
        showPage(currentPage);
    }

    function updatePagination() {
        const pageNumbers = document.getElementById('page-numbers');
        pageNumbers.innerHTML = '';
        for (let i = 1; i <= totalPages; i++) {
            const pageLink = document.createElement('a');
            pageLink.href = '#';
            pageLink.className = `relative inline-flex items-center px-4 py-2 border ${i === currentPage ? 'bg-green-500 text-white' : 'bg-white text-gray-700'} text-sm font-medium hover:bg-gray-50`;
            pageLink.textContent = i;
            pageLink.onclick = (e) => {
                e.preventDefault();
                currentPage = i;
                showPage(currentPage);
            };
            pageNumbers.appendChild(pageLink);
        }
    }

    showPage(currentPage);
</script>
