<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">

    <!-- Header / Navbar -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="text-xl font-bold text-indigo-600">MyPortfolio</a>
            <div class="space-x-6 text-sm font-medium">
                <a href="#projects" class="hover:text-indigo-600 transition">Proyek</a>
                <a href="#contact" class="hover:text-indigo-600 transition">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-indigo-600 text-white py-16 text-center">
        <div class="max-w-3xl mx-auto px-4">
            <h1 class="text-3xl md:text-5xl font-extrabold mb-4">Selamat Datang di Portofolio Saya</h1>
            <p class="text-indigo-100 text-base md:text-lg">
                Berikut adalah beberapa proyek yang telah saya kerjakan menggunakan berbagai teknologi modern.
            </p>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="max-w-6xl mx-auto px-4 py-16">
        <h2 class="text-2xl md:text-3xl font-bold text-center mb-10 text-gray-900">Proyek Unggulan</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
                <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col justify-between hover:shadow-lg transition duration-300">
                    <div>
                        @if(isset($project['image']) && $project['image'])
                            <img src="{{ $project['image'] }}" alt="{{ $project['title'] ?? 'Gambar Proyek' }}" class="w-full h-48 object-cover">
                        @endif
                        <div class="p-6">
                            @if(isset($project['category']))
                                <span class="text-xs font-semibold uppercase tracking-wider text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full">
                                    {{ $project['category'] }}
                                </span>
                            @endif
                            
                            <h3 class="text-xl font-bold mt-3 mb-2 text-gray-800">
                                {{ $project['title'] ?? 'Judul Proyek' }}
                            </h3>
                            
                            <p class="text-gray-600 text-sm mb-4">
                                {{ $project['description'] ?? '' }}
                            </p>

                            @if(isset($project['tags']) && is_array($project['tags']))
                                <div class="flex flex-wrap gap-2 mb-4">
                                    @foreach($project['tags'] as $tag)
                                        <span class="text-xs bg-gray-100 text-gray-700 px-2.5 py-1 rounded font-medium">
                                            {{ $tag }}
                                        </span>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="px-6 pb-6 pt-0">
                        <a href="{{ $project['link'] ?? '#' }}" class="inline-block w-full text-center bg-indigo-600 text-white font-medium px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact" class="bg-white py-16 border-t border-gray-200">
        <div class="max-w-xl mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-6 text-gray-900">Hubungi Saya</h2>

            <!-- Pesan Sukses dari Session -->
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg text-sm">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form Kontak -->
            <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none text-sm">
                    @error('name')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none text-sm">
                    @error('email')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                    <textarea id="message" name="message" rows="4" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none text-sm">{{ old('message') }}</textarea>
                    @error('message')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" 
                    class="w-full bg-indigo-600 text-white font-semibold py-2.5 px-4 rounded-lg hover:bg-indigo-700 transition">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-400 py-6 text-center text-sm">
        <p>&copy; {{ date('Y') }} Portofolio Saya. All rights reserved.</p>
    </footer>

</body>
</html>