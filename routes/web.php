<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Halaman Utama Portofolio
Route::get('/', function () {
    // Data proyek statis untuk dikirim ke view
    $projects = [
        [
            'title' => 'E-Commerce Platform',
            'category' => 'Web App',
            'description' => 'Aplikasi e-commerce lengkap dengan integrasi payment gateway dan keranjang belanja.',
            'image' => 'https://images.unsplash.com/photo-1557821552-17105176676c?auto=format&fit=crop&w=600&q=80',
            'tags' => ['Laravel', 'Tailwind CSS', 'MySQL'],
            'link' => '#'
        ],
        [
            'title' => 'Task Management Dashboard',
            'category' => 'React',
            'description' => 'Dashboard manajemen tugas interaktif dengan fitur drag-and-drop dan analitik.',
            'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&q=80',
            'tags' => ['React', 'Laravel API', 'Tailwind CSS'],
            'link' => '#'
        ],
        [
            'title' => 'Company Profile & CMS',
            'category' => 'Web App',
            'description' => 'Website profil perusahaan dengan sistem manajemen konten kustom (CMS).',
            'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80',
            'tags' => ['Laravel', 'Blade', 'Bootstrap'],
            'link' => '#'
        ],
    ];

    return view('portofolio', compact('projects'));
})->name('portfolio');

// Aksi ketika form kontak dikirim
Route::post('/contact', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    return back()->with('success', 'Terima kasih! Pesan Anda berhasil dikirim.');
})->name('contact.store');