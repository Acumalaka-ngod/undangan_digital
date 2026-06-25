<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        if ($this->input->method() === 'post' && $this->input->post('nama')) {
            $nama     = htmlspecialchars($this->input->post('nama', true));
            $jenis    = htmlspecialchars($this->input->post('jenis', true));
            $template = htmlspecialchars($this->input->post('template', true));
            $tanggal  = htmlspecialchars($this->input->post('tanggal', true));
            $catatan  = htmlspecialchars($this->input->post('catatan', true));

            $wa_text = urlencode("Halo HJP, saya {$nama} ingin memesan undangan digital.\nJenis Acara: {$jenis}\nTemplate: {$template}\nTanggal: {$tanggal}\nCatatan: {$catatan}");
            redirect("https://wa.me/6289505799964?text={$wa_text}");
        }

        $base = base_url();
        $data['katalog'] = [
            [
                'nama' => 'Modern Elegance',
                'deskripsi' => 'Minimalist & sophisticated for city weddings',
                'harga' => 149000,
                'badge' => null,
                'img_class' => 'card-dark',
                'gambar' => 'assets/images/preview-modern.svg',
                'demo_url' => $base . 'demos/modern/',
            ],
            [
                'nama' => 'Garden Wedding',
                'deskripsi' => 'Soft florals and pastel tones for nature lovers',
                'harga' => 169000,
                'badge' => 'Best Seller',
                'img_class' => 'card-green',
                'gambar' => 'assets/images/preview-garden.svg',
                'demo_url' => $base . 'demos/garden/',
            ],
            [
                'nama' => 'Classic Royal',
                'deskripsi' => 'Timeless gold accents for a grand celebration',
                'harga' => 199000,
                'badge' => null,
                'img_class' => 'card-royal',
                'gambar' => 'assets/images/preview-royal.svg',
                'demo_url' => $base . 'demos/royal/',
            ],
        ];

        $data['fitur'] = [
            ['icon' => '⚡', 'judul' => 'Proses Cepat', 'desc' => 'Undangan siap dalam waktu kurang dari 24 jam'],
            ['icon' => '💰', 'judul' => 'Harga Terjangkau', 'desc' => 'Mulai dari harga yang bersahabat untuk semua kalangan'],
            ['icon' => '🎨', 'judul' => 'Desain Beragam', 'desc' => 'Tersedia ratusan template untuk segala jenis acara'],
            ['icon' => '🔗', 'judul' => 'Mudah Dibagikan', 'desc' => 'Cukup kirim link kepada semua tamu undangan'],
        ];

        $data['langkah'] = [
            'Pilih Template' => 'Pilih desain yang paling cocok untuk acara Anda',
            'Kirim Data' => 'Lengkapi form data acara dengan mudah & cepat',
            'Proses Desain' => 'Tim kami akan segera memproses undangan Anda',
            'Siap Bagikan' => 'Undangan digital siap disebarkan kepada tamu',
        ];

        $data['jenis_acara'] = ['Pernikahan', 'Ulang Tahun', 'Khitanan', 'Aqiqah', 'Wisuda', 'Lainnya'];
        $data['template_pilihan'] = ['Modern Elegance', 'Garden Wedding', 'Classic Royal'];

        $this->load->view('home/index', $data);
    }

    public function detail($id = 0)
    {
        $base = base_url();
        $katalog = [
            [
                'id' => 0,
                'nama' => 'Modern Elegance',
                'deskripsi' => 'Minimalist & sophisticated for city weddings',
                'harga' => 149000,
                'badge' => null,
                'img_class' => 'card-dark',
                'gambar' => 'assets/images/preview-modern.svg',
                'demo_url' => $base . 'demos/modern/',
                'couple' => 'Alexa & Jamie',
                'tanggal' => '8 Agustus 2026',
                'font_pair' => "'Playfair Display', 'Inter'",
                'theme_bg' => 'linear-gradient(135deg, #1a1a2e, #16213e)',
                'theme_accent' => '#f3cb51',
                'theme_text' => '#ffffff',
                'theme_light' => '#fef5e0',
            ],
            [
                'id' => 1,
                'nama' => 'Garden Wedding',
                'deskripsi' => 'Soft florals and pastel tones for nature lovers',
                'harga' => 169000,
                'badge' => 'Best Seller',
                'img_class' => 'card-green',
                'gambar' => 'assets/images/preview-garden.svg',
                'demo_url' => $base . 'demos/garden/',
                'couple' => 'Lily & Ethan',
                'tanggal' => '12 September 2026',
                'font_pair' => "'Sacramento', 'Lora'",
                'theme_bg' => 'linear-gradient(135deg, #1e3528, #2d5a46)',
                'theme_accent' => '#f3cb51',
                'theme_text' => '#ffffff',
                'theme_light' => '#e8f5e8',
            ],
            [
                'id' => 2,
                'nama' => 'Classic Royal',
                'deskripsi' => 'Timeless gold accents for a grand celebration',
                'harga' => 199000,
                'badge' => null,
                'img_class' => 'card-royal',
                'gambar' => 'assets/images/preview-royal.svg',
                'demo_url' => $base . 'demos/royal/',
                'couple' => 'Isabella & Alexander',
                'tanggal' => '24 Oktober 2026',
                'font_pair' => "'Great Vibes', 'Cormorant Garamond'",
                'theme_bg' => 'linear-gradient(135deg, #4a0010, #800020)',
                'theme_accent' => '#f3cb51',
                'theme_text' => '#ffffff',
                'theme_light' => '#FFFDD0',
            ],
        ];

        if (!isset($katalog[$id])) {
            show_404();
        }

        $data['item'] = $katalog[$id];
        $data['katalog'] = $katalog;
        $data['fitur'] = [
            ['icon' => '⚡', 'judul' => 'Proses Cepat', 'desc' => 'Undangan siap dalam waktu kurang dari 24 jam'],
            ['icon' => '💰', 'judul' => 'Harga Terjangkau', 'desc' => 'Mulai dari harga yang bersahabat untuk semua kalangan'],
            ['icon' => '🎨', 'judul' => 'Desain Beragam', 'desc' => 'Tersedia ratusan template untuk segala jenis acara'],
            ['icon' => '🔗', 'judul' => 'Mudah Dibagikan', 'desc' => 'Cukup kirim link kepada semua tamu undangan'],
        ];

        $this->load->view('home/detail', $data);
    }
}
