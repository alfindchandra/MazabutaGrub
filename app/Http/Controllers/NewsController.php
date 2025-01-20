<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    
    public function index()
    {
        $news = $this->getNewsData();
        return view('news.index', compact('news'));
    }

    public function berita()
    {
        $news = $this->getNewsData();
        return view('news.index', compact('news'));
    }
    public function home(){
        
        $news = $this->getNewsData();
        return view('welcome', compact('news'));
    }
      private function getNewsData()
    {
        return [
            [
                'id' => 1,
                'title' => 'SALES & MARKETING SKILLS TRAINING',
                'excerpt' => 'Dalam mempersiapkan dan menjawab tantangan di masa yang akan datang,',
                'content' => 'Dalam mempersiapkan dan menjawab tantangan di masa yang akan datang, Mazabuta Group melalui anak perusahaan, PT. Groen Indonesia memberikan training mengenai Sales & Marketing Skills dengan tujuan agar karyawan dapat bekerja secara totalitas, bertanggung jawab dan berorientasi terhadap target yang telah ditentukan.',
                'image' => 'https://www.mazabuta.com/assets/news/19082019/mazabuta_xyn2p_2.jpg',
                'author' => 'Fadly',
                'created_at' => '2019-08-19'
            ],
            [
                'id' => 4,
                'title' => 'SALES & MARKETING SKILLS TRAINING',
                'excerpt' => 'Dalam mempersiapkan dan menjawab tantangan di masa yang akan datang,',
                'content' => 'Dalam mempersiapkan dan menjawab tantangan di masa yang akan datang, Mazabuta Group melalui anak perusahaan, PT. Groen Indonesia memberikan training mengenai Sales & Marketing Skills dengan tujuan agar karyawan dapat bekerja secara totalitas, bertanggung jawab dan berorientasi terhadap target yang telah ditentukan.',
                'image' => 'https://www.mazabuta.com/assets/news/19082019/mazabuta_xyn2p_2.jpg',
                'author' => 'Fadly',
                'created_at' => '2019-08-19'
            ],
            [
                'id' => 3,
                'title' => 'SALES & MARKETING SKILLS TRAINING',
                'excerpt' => 'Dalam mempersiapkan dan menjawab tantangan di masa yang akan datang,',
                'content' => 'Dalam mempersiapkan dan menjawab tantangan di masa yang akan datang, Mazabuta Group melalui anak perusahaan, PT. Groen Indonesia memberikan training mengenai Sales & Marketing Skills dengan tujuan agar karyawan dapat bekerja secara totalitas, bertanggung jawab dan berorientasi terhadap target yang telah ditentukan.',
                'image' => 'https://www.mazabuta.com/assets/news/19082019/mazabuta_xyn2p_2.jpg',
                'author' => 'Fadly',
                'created_at' => '2019-08-19'
            ],
            [
                'id' => 5,
                'title' => 'SALES & MARKETING SKILLS TRAINING',
                'excerpt' => 'Dalam mempersiapkan dan menjawab tantangan di masa yang akan datang,',
                'content' => 'Dalam mempersiapkan dan menjawab tantangan di masa yang akan datang, Mazabuta Group melalui anak perusahaan, PT. Groen Indonesia memberikan training mengenai Sales & Marketing Skills dengan tujuan agar karyawan dapat bekerja secara totalitas, bertanggung jawab dan berorientasi terhadap target yang telah ditentukan.',
                'image' => 'https://www.mazabuta.com/assets/news/19082019/mazabuta_xyn2p_2.jpg',
                'author' => 'Fadly',
                'created_at' => '2019-08-19'
            ],
            [
                'id' => 2,
                'title' => 'Jaga Bumi, Go Green Jadi Agama di Norwegia',
                'excerpt' => 'Tapi sekali lagi, Norwegia melakukan hal ini karena mereka sangat cinta alam dan suka beraktivitas di luar ruangan. Saking cintanya main ke alam, Norwegia punya transportasi umum yang mengantarkan mereka sampai ke hutan..',
                'content' => 'Tapi sekali lagi, Norwegia melakukan hal ini karena mereka sangat cinta alam dan suka beraktivitas di luar ruangan. Saking cintanya main ke alam, Norwegia punya transportasi umum yang mengantarkan mereka sampai ke hutan. Main ke hutan jadi aktivitas yang biasa dilakukan orang Norwegia sebelum atau sesudah bekerja.

"Ini adalah bagian yang sangat mengakar dalam budaya kita, dan sesuatu yang hampir seperti agama bagi banyak orang (masyarakat Norwegia-red)," kata Axel Bentsen, pendiri dan CEO Urban Sharing, dilansir dari BBC.

Saking cintanya dengan alam, masyarakat Norwegia terbiasa bekerja dengan waktu yang fleksibel. Mereka lebih suka bersantai menikmati alam saat siang hari dan bekerja malam hari. Ada cara pandang unik dari sini, mereka percaya bahwa mereka akan mendapatkan sudut pandang yang berbeda ketika berada di luar ruangan.',
                'image' => 'https://www.mazabuta.com/assets/news/08082019/mazabuta_z4sna_1.jpg',
                'author' => 'Admin Mazabuta',
                'created_at' => '2019-08-08'
            ],
            
        ];
    }


    public function show($id)
    {
        $allNews = $this->getNewsData();
        $news = collect($allNews)->firstWhere('id', (int) $id);
        
        if (!$news) {
            abort(404);
        }
        
        return view('news.show', compact('news'));
    }
}
