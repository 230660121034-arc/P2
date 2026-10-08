<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya - Web Developer</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-900 text-slate-100 antialiased selection:bg-indigo-500 selection:text-white">

    <!-- NAVBAR -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-slate-900/80 backdrop-blur-md border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="#" class="text-xl font-bold bg-gradient-to-r from-indigo-400 to-cyan-400 bg-clip-text text-transparent">
                    Portofolio.
                </a>
                <div class="hidden md:flex space-x-8 text-sm font-medium">
                    <a href="#about" class="hover:text-indigo-400 transition">Tentang</a>
                    <a href="#skills" class="hover:text-indigo-400 transition">Keahlian</a>
                    <a href="#projects" class="hover:text-indigo-400 transition">Proyek</a>
                    <a href="#contact" class="hover:text-indigo-400 transition">Kontak</a>
                </div>
                <div>
                    <a href="#contact" class="bg-indigo-600 hover:bg-indigo-500 text-white text-sm font-medium px-4 py-2 rounded-full transition shadow-lg shadow-indigo-500/25">
                        Hubungi Saya
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="min-h-screen flex items-center justify-center pt-20 pb-16 px-4 relative overflow-hidden">
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute top-1/2 -right-40 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-4xl mx-auto text-center relative z-10">
            <div class="inline-flex items-center space-x-2 bg-slate-800/80 border border-slate-700 px-3 py-1.5 rounded-full text-xs text-slate-300 mb-6">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                <span>Tersedia untuk proyek freelance & kerja penuh waktu</span>
            </div>
            <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight mb-6">
                Halo, Saya <span class="bg-gradient-to-r from-indigo-400 via-purple-400 to-cyan-400 bg-clip-text text-transparent">Nama Anda</span>
            </h1>
            <p class="text-lg sm:text-xl text-slate-400 max-w-2xl mx-auto mb-8">
                Seorang <strong class="text-slate-200">Full-Stack Web Developer</strong> yang berfokus pada pengembangan aplikasi web modern menggunakan ekosistem Laravel.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#projects" class="w-full sm:w-auto bg-indigo-600 hover:bg-indigo-500 text-white font-medium px-8 py-3 rounded-xl transition shadow-lg shadow-indigo-500/25 text-center">
                    Lihat Proyek
                </a>
                <a href="#contact" class="w-full sm:w-auto bg-slate-800 hover:bg-slate-700 text-slate-200 border border-slate-700 font-medium px-8 py-3 rounded-xl transition text-center">
                    Kontak Saya
                </a>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="py-20 bg-slate-950/50 border-t border-slate-800/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold tracking-tight mb-2">Tentang Saya</h2>
                <p class="text-slate-400 text-sm">Sedikit latar belakang dan perjalanan saya di dunia pemrograman.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-cyan-500 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                    <div class="relative bg-slate-900 border border-slate-800 p-2 rounded-2xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=800&q=80" alt="Profile" class="rounded-xl w-full h-80 object-cover">
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold mb-4 text-indigo-400">Membangun Solusi Web yang Andal & Skalabel</h3>
                    <p class="text-slate-300 mb-6 leading-relaxed">
                        Saya memiliki pengalaman dalam merancang dan mengembangkan aplikasi web dari awal hingga tahap deployment. Dengan Laravel, saya terbiasa menulis kode yang bersih, aman, dan mudah dipelihara.
                    </p>
                    <div class="grid grid-cols-2 gap-4 text-sm">
                        <div class="bg-slate-900 border border-slate-800 p-4 rounded-xl">
                            <span class="block text-slate-400 text-xs">Pengalaman</span>
                            <span class="font-bold text-lg text-slate-100">3+ Tahun</span>
                        </div>
                        <div class="bg-slate-900 border border-slate-800 p-4 rounded-xl">
                            <span class="block text-slate-400 text-xs">Proyek Selesai</span>
                            <span class="font-bold text-lg text-slate-100">20+ Proyek</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section id="projects" class="py-20 border-t border-slate-800/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold tracking-tight mb-2">Proyek Pilihan</h2>
                <p class="text-slate-400 text-sm">Beberapa karya terbaik yang telah saya buat.</p>
            </div>

            <!-- Menampilkan data menggunakan Blade directive @foreach -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($projects as $project)
                <div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden flex flex-col hover:border-indigo-500/50 transition group">
                    <div class="overflow-hidden h-48 relative">
                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <span class="absolute top-3 right-3 bg-slate-900/80 backdrop-blur-md text-xs font-semibold px-3 py-1 rounded-full text-indigo-400 border border-slate-700">
                            {{ $project['category'] }}
                        </span>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-semibold mb-2 text-slate-100 group-hover:text-indigo-400 transition">{{ $project['title'] }}</h3>
                        <p class="text-slate-400 text-sm mb-4 flex-grow">{{ $project['description'] }}</p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            @foreach($project['tags'] as $tag)
                            <span class="bg-slate-800 text-slate-300 text-xs px-2.5 py-1 rounded-md">{{ $tag }}</span>
                            @endforeach
                        </div>
                        <a href="{{ $project['link'] }}" class="inline-flex items-center justify-center space-x-2 w-full bg-slate-800 hover:bg-indigo-600 text-slate-200 hover:text-white py-2.5 rounded-xl font-medium text-sm transition">
                            <span>Lihat Detail</span>
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="py-20 bg-slate-950/50 border-t border-slate-800/60">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold tracking-tight mb-2">Hubungi Saya</h2>
                <p class="text-slate-400 text-sm">Punya pertanyaan atau ingin bekerja sama? Kirimkan pesan melalui form di bawah.</p>
            </div>

            @if(session('success'))
            <div class="bg-emerald-500/10 border border-emerald-500 text-emerald-400 px-4 py-3 rounded-xl mb-6 text-sm text-center">
                {{ session('success') }}
            </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="bg-slate-900 border border-slate-800 p-8 rounded-2xl shadow-xl space-y-6">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-2">Nama Lengkap</label>
                    <input type="text" name="name" required class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-slate-100 focus:outline-none focus:border-indigo-500 transition text-sm" placeholder="John Doe">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-2">Alamat Email</label>
                    <input type="email" name="email" required class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-slate-100 focus:outline-none focus:border-indigo-500 transition text-sm" placeholder="john@example.com">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-2">Pesan</label>
                    <textarea name="message" rows="4" required class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-slate-100 focus:outline-none focus:border-indigo-500 transition text-sm" placeholder="Tulis pesan atau penawaran Anda di sini..."></textarea>
                </div>
                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-medium py-3 rounded-xl transition shadow-lg shadow-indigo-500/25 text-sm">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-8 bg-slate-950 border-t border-slate-800/80 text-center text-sm text-slate-500">
        <p>&copy; {{ date('Y') }} Nama Anda. Dibuat dengan Laravel & Tailwind CSS.</p>
    </footer>

</body>
</html>