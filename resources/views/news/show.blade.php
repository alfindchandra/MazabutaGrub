<!-- resources/views/news/show.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $news['title'] }} - Portal Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                <img src="{{ $news['image'] }}" 
                     alt="{{ $news['title'] }}" 
                     class="w-full h-96 object-cover">
                
                <div class="p-8">
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <span>{{ date('d M Y', strtotime($news['created_at'])) }}</span>
                        <span class="mx-2">•</span>
                        <span>{{ $news['author'] }}</span>
                    </div>
                    
                    <h1 class="text-3xl font-bold mb-6">{{ $news['title'] }}</h1>
                    
                    <div class="prose max-w-none">
                        <p class="text-gray-700 leading-relaxed">
                            {{ $news['content'] }}
                        </p>
                    </div>
                    
                    <div class="mt-8 pt-6 border-t">
                        <a href="{{ route('welcome') }}" 
                           class="inline-flex items-center text-blue-600 hover:text-blue-700">
                            <svg class="mr-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                            Kembali ke Daftar Berita
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>