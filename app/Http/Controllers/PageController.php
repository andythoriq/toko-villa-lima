<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda()
    {
        return view('halaman.beranda', [
            'title' => 'Toko Villa Lima',
            'description' => 'Biasa disebut dengan Tokovili, berada di Villa Bogor Indah 5 merupakan toko atau warung yang memenuhi kebutuhan rumah tangga. Toko Villa Lima tidak hanya menjual sembako dan jajanan, tapi juga menjual atau menyediakan layanan isi ulang galon, token listrik, dan pulsa. Situs ini hanya melayani warga yang sedang berada di kawasan Villa Bogor Indah 5. Jika anda berada jauh dari Villa Bogor Indah 5, maka datang dan belilah secara langsung. Lokasi lebih lengkap berada di Kabupaten Bogor kecamatan Sukaraja desa Pasir Jambu Villa Bogor Indah 5.
            ',
            'activate' => 'Beranda',
            // TODO : 'stocks' => Stock::orderBy('created_at', 'asc')->get()
    ]);
    }
    public function gallery()
    {
        return view('halaman.gallery', [
            'title' => 'Gallery',
            'description' => 'Ini adalah halaman gallery yang menyimpan kumpulan foto lama beserta sejarah singkat tentang Toko Villa Lima.',
            'activate' => 'Gallery'
        ]);
    }
    public function contact()
    {
        return view('halaman.contact', [
            'title' => 'Contact',
            'description' => "Jika ada hal yang ingin dibantu atau ada yang ingin ditanyakan mengenai Toko Villa Lima, bisa hubungi nomor WhatsApp ... atau klik link di bawah.",
            'activate' => 'Contact'
            // TODO!! : ... adalah nomor telephone atau link Wa
        ]);
    }
    public function saran()
    {
        return "halaman saran belum dibuat";
    }
}
