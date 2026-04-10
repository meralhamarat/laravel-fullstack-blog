<!DOCTYPE html>
<html lang="tr" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meral Hamarat | Portfolyo</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-brand-dark antialiased overflow-x-hidden">

<nav class="fixed top-0 w-full bg-brand-dark/95 backdrop-blur-sm text-white z-50 shadow-lg border-b border-white/5">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center h-20">
            <a href="#about" class="text-2xl font-bold tracking-wider text-brand-yellow hover:text-white transition cursor-pointer">
                Meral.<span class="text-white">H</span>
            </a>

            <div class="hidden md:flex space-x-8 text-sm font-medium">
                <a href="#about" class="hover:text-brand-yellow transition cursor-pointer">Hakkımda</a>
                <a href="#skills" class="hover:text-brand-yellow transition cursor-pointer">Yetenekler</a>
                <a href="#projects" class="hover:text-brand-yellow transition cursor-pointer">Projeler</a>
                <a href="/blog" class="hover:text-brand-yellow transition cursor-pointer">Blog</a>
                <a href="#contact" class="px-5 py-2 bg-brand-yellow text-brand-dark rounded-full font-bold hover:bg-white transition cursor-pointer">İletişim</a>
            </div>

            <button id="mobile-menu-btn" class="md:hidden text-white focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </div>
</nav>

<section id="about" class="bg-brand-dark min-h-screen flex items-center pt-24 pb-12 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center w-full relative z-10">

        <div class="relative flex justify-center order-2 lg:order-1">
            <div class="relative w-72 h-72 md:w-96 md:h-96">
                <div class="hero-blob"></div>
                <img src="{{ asset('img/meral.jpg') }}" alt="Meral Hamarat" class="relative w-full h-full object-cover rounded-full shadow-2xl">

                <div class="absolute top-0 -right-4 bg-white text-brand-dark px-4 py-2 rounded-full shadow-lg text-xs font-bold animate-bounce" style="animation-duration: 3s;">
                    🤖 Yapay Zeka
                </div>
                <div class="absolute bottom-10 -left-6 bg-white text-brand-dark px-4 py-2 rounded-full shadow-lg text-xs font-bold animate-bounce" style="animation-delay: 1s;">
                    📱 Mobil
                </div>
                <div class="absolute bottom-8 -right-4 bg-white text-brand-dark px-4 py-2 rounded-full shadow-lg text-xs font-bold animate-bounce" style="animation-delay: 2s;">
                    💻 PHP
                </div>
            </div>
        </div>

        <div class="text-white order-1 lg:order-2">
            <span class="text-brand-yellow font-bold tracking-widest uppercase text-sm mb-2 block">- Merhaba</span>
            <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                Ben <span class="text-brand-yellow">Meral Hamarat</span>
            </h1>
            <p class="text-gray-300 text-lg mb-6 leading-relaxed">
                NKÜ Bilgisayar Mühendisliği 4. Sınıf öğrencisiyim.
            </p>
            <div class="border-l-2 border-brand-yellow pl-4 space-y-4 mb-8 text-gray-400 text-sm">
                <p><b>AYVOS Bilgi Teknolojileri:</b> AI & Computer Vision Intern (2025 Summer)</p>
                <p><b>Kafein Technology:</b> PHP Backend Developer Intern (Ongoing)</p>
            </div>
            <a href="#projects" class="bg-brand-yellow text-brand-dark px-8 py-3 rounded-full font-bold hover:bg-white transition inline-block shadow-lg">
                Projelerimi Gör
            </a>
        </div>
    </div>
</section>

<section id="skills" class="py-20 bg-brand-dark">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-white mb-16">Yetkinlikler</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-12">
            @php
                $skills = [
                    ['icon' => 'fab fa-python', 'label' => 'Python', 'progress' => '95deg', 'color' => 'text-brand-dark'],
                    ['icon' => 'fab fa-microsoft', 'label' => 'C# / .NET', 'progress' => '85deg', 'color' => 'text-purple-600'],
                    ['icon' => 'fas fa-mobile-alt', 'label' => 'Flutter', 'progress' => '80deg', 'color' => 'text-blue-400'],
                    ['icon' => 'fas fa-database', 'label' => 'SQL', 'progress' => '75deg', 'color' => 'text-gray-600'],
                    ['icon' => 'fas fa-chart-pie', 'label' => 'Veri Bilimi', 'progress' => '80deg', 'color' => 'text-orange-500'],
                    ['icon' => 'fas fa-eye', 'label' => 'OpenCV', 'progress' => '70deg', 'color' => 'text-blue-600']
                ];
            @endphp
            @foreach($skills as $skill)
                <div class="flex flex-col items-center group">
                    <div class="progress-ring w-24 h-24 mb-4" style="--progress: {{ $skill['progress'] }};">
                        <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center text-3xl {{ $skill['color'] }}">
                            <i class="{{ $skill['icon'] }}"></i>
                        </div>
                    </div>
                    <span class="font-bold text-white">{{ $skill['label'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="projects" class="py-20 bg-brand-green/20">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-white mb-12 text-center">Projelerim</h2>

        {{-- Proje görselleri public/img içinden çekiliyor --}}
        @if(isset($projects) && $projects->count() > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                    <div class="bg-brand-dark rounded-3xl border border-white/10 overflow-hidden hover:border-brand-yellow transition duration-300 flex flex-col h-full">
                        <div class="h-48 overflow-hidden">
                            <img src="{{ asset('img/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover transform hover:scale-110 transition duration-500">
                        </div>
                        <div class="p-6 flex flex-col flex-1">
                            <h3 class="text-xl font-bold text-white mb-2">{{ $project->title }}</h3>
                            <p class="text-gray-400 text-sm mb-4 flex-1">{{ Str::limit($project->description, 100) }}</p>
                            <div class="flex flex-wrap gap-2 mt-auto">
                                @foreach(explode(',', $project->tags) as $tag)
                                    <span class="text-[10px] bg-white/5 px-2 py-1 rounded text-brand-yellow border border-white/10">{{ trim($tag) }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center text-gray-400 py-12 bg-white/5 rounded-3xl border border-dashed border-white/20">
                <p class="mb-4">Henüz proje eklenmemiş.</p>
                {{-- Eğer projeniz yoksa test amaçlı public/img içine bir görsel koyup manuel ekleme yapabilirsiniz --}}
            </div>
        @endif
    </div>
</section>

<footer id="contact" class="bg-brand-dark text-white py-16 border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-6">Birlikte Çalışalım</h2>
        <a href="mailto:meralhamarat24@gmail.com" class="text-brand-yellow text-2xl font-bold hover:underline mb-8 block">meralhamarat24@gmail.com</a>
        <div class="flex justify-center space-x-6">
            <a href="https://github.com/meralhamarat" target="_blank" class="text-2xl hover:text-brand-yellow transition"><i class="fab fa-github"></i></a>
            <a href="https://linkedin.com/in/meral-hamarat-a2702b252" target="_blank" class="text-2xl hover:text-brand-yellow transition"><i class="fab fa-linkedin"></i></a>
        </div>
        <p class="mt-12 text-gray-600 text-xs">&copy; 2026 Meral Hamarat.</p>
    </div>
</footer>

<script>
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    btn.addEventListener('click', () => menu.classList.toggle('hidden'));
</script>
</body>
</html>
