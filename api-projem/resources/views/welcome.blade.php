<!DOCTYPE html>
<html lang="tr" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meral Hamarat | Portfolyo</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-dark': '#1e3932',
                        'brand-green': '#2c5545',
                        'brand-yellow': '#f3a712',
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        /* Kaydırma ve Navbar Ayarı */
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px;
        }
        body { font-family: 'Poppins', sans-serif; }

        .hero-blob {
            position: absolute; top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            width: 110%; height: 110%;
            background-color: #f3a712;
            border-radius: 50%; z-index: -1;
        }

        .progress-ring {
            background: conic-gradient(var(--tw-text-opacity, #f3a712) var(--progress), #e5e7eb 0deg);
            border-radius: 50%; display: flex; align-items: center; justify-content: center;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

<nav class="fixed top-0 w-full bg-brand-dark text-white z-50 shadow-lg">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center h-20">
            <a href="#about" class="text-2xl font-bold tracking-wider text-brand-yellow hover:text-white transition cursor-pointer">
                Meral.<span class="text-white">H</span>
            </a>

            <div class="hidden md:flex space-x-8 text-sm font-medium">
                <a href="#about" class="hover:text-brand-yellow transition cursor-pointer">Hakkımda</a>
                <a href="#skills" class="hover:text-brand-yellow transition cursor-pointer">Yetenekler</a>
                <a href="#projects" class="hover:text-brand-yellow transition cursor-pointer">Projeler</a>
                <a href="#projects" class="hover:text-brand-yellow transition cursor-pointer">Blog</a>
                <a href="#contact" class="px-5 py-2 bg-brand-yellow text-brand-dark rounded-full font-bold hover:bg-white transition cursor-pointer">İletişim</a>
            </div>

            <button id="mobile-menu-btn" class="md:hidden text-white focus:outline-none hover:text-brand-yellow transition">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-brand-green border-t border-white/10">
        <div class="px-4 pt-2 pb-6 space-y-2">
            <a href="#about" class="mobile-link block px-3 py-2 text-white hover:bg-brand-dark rounded-md cursor-pointer">Hakkımda</a>
            <a href="#skills" class="mobile-link block px-3 py-2 text-white hover:bg-brand-dark rounded-md cursor-pointer">Yetenekler</a>
            <a href="#projects" class="mobile-link block px-3 py-2 text-white hover:bg-brand-dark rounded-md cursor-pointer">Projeler</a>
            <a href="/blog" class="mobile-link block px-3 py-2 text-white hover:bg-brand-dark rounded-md cursor-pointer">Blog</a>
            <a href="#contact" class="mobile-link block px-3 py-2 text-brand-yellow font-bold hover:bg-brand-dark rounded-md cursor-pointer">İletişim</a>
        </div>
    </div>
</nav>

<section id="about" class="bg-brand-dark min-h-screen flex items-center pt-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center w-full">

        <div class="relative flex justify-center order-2 lg:order-1 mt-10 lg:mt-0">
            <div class="relative w-80 h-80 md:w-96 md:h-96">
                <div class="hero-blob"></div>
                <img src="{{ asset('img/meral.jpg') }}" alt="Meral Hamarat" class="relative w-full h-full object-cover rounded-full border-4 border-brand-dark shadow-2xl">
                <div class="absolute top-0 right-0 bg-white text-brand-dark px-4 py-2 rounded-full shadow-lg text-xs font-bold animate-bounce" style="animation-duration: 3s;">
                    🤖 Yapay Zeka
                </div>
                <div class="absolute bottom-10 -left-4 bg-white text-brand-dark px-4 py-2 rounded-full shadow-lg text-xs font-bold animate-bounce" style="animation-delay: 1s;">
                    📱 Mobil Geliştirme
                </div>
                <div class="absolute bottom-8 -right-0 bg-white text-brand-dark px-4 py-2 rounded-full shadow-lg text-xs font-bold animate-bounce" style="animation-delay: 2s;">
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
                Tekirdağ Namık Kemal Üniversitesi <b>Bilgisayar Mühendisliği 4. Sınıf</b> öğrencisiyim.
                Teknolojiye tutkulu, öğrenmeye açık biriyim.
            </p>
            <p class="text-gray-400 text-sm mb-8 leading-relaxed border-l-2 border-brand-yellow pl-4">
                <b>AYVOS Bilgi Teknolojileri</b> şirketinde "Yapay Zeka & Görüntü İşleme Stajyeri" olarak;
                Python, OpenCV, Nesne Tespiti (YOLO) ve OCR teknolojileri üzerine deneyim kazandım.
            </p>
            <p class="text-gray-400 text-sm mb-8 leading-relaxed border-l-2 border-brand-yellow pl-4">
                <b>Kafein Technology Solutions</b> firmasında aktif olarak PHP Backend Developer Intern
                olarak Laravel ile çalışıyorum.
            </p>

            <div class="flex gap-8 mb-8">
                <div>
                    <span class="block text-3xl font-bold text-brand-yellow">4.</span>
                    <span class="text-xs text-gray-400">Sınıf</span>
                </div>
                <div>
                    <span class="block text-3xl font-bold text-brand-yellow">10+</span>
                    <span class="text-xs text-gray-400">Tamamlanan<br>Proje</span>
                </div>
            </div>

            <a href="#projects" class="bg-brand-yellow text-brand-dark px-8 py-3 rounded-full font-bold hover:bg-white transition inline-block shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                Projelerimi Gör
            </a>
        </div>
    </div>
</section>

<section id="skills" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-brand-dark mb-12">Yetkinlikler</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">

            <div class="flex flex-col items-center group cursor-pointer">
                <div class="progress-ring w-24 h-24 mb-4 shadow-sm group-hover:shadow-md transition-all duration-300 transform group-hover:scale-110" style="--progress: 95deg;">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center text-3xl text-brand-dark">
                        <i class="fab fa-python"></i>
                    </div>
                </div>
                <span class="font-bold text-brand-dark">Python</span>
            </div>

            <div class="flex flex-col items-center group cursor-pointer">
                <div class="progress-ring w-24 h-24 mb-4 shadow-sm group-hover:shadow-md transition-all duration-300 transform group-hover:scale-110" style="--progress: 85deg;">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center text-3xl text-purple-600">
                        <i class="fab fa-microsoft"></i>
                    </div>
                </div>
                <span class="font-bold text-brand-dark">C# / .NET</span>
            </div>

            <div class="flex flex-col items-center group cursor-pointer">
                <div class="progress-ring w-24 h-24 mb-4 shadow-sm group-hover:shadow-md transition-all duration-300 transform group-hover:scale-110" style="--progress: 80deg;">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center text-3xl text-blue-400">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                </div>
                <span class="font-bold text-brand-dark">Flutter</span>
            </div>

            <div class="flex flex-col items-center group cursor-pointer">
                <div class="progress-ring w-24 h-24 mb-4 shadow-sm group-hover:shadow-md transition-all duration-300 transform group-hover:scale-110" style="--progress: 75deg;">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center text-3xl text-gray-600">
                        <i class="fas fa-database"></i>
                    </div>
                </div>
                <span class="font-bold text-brand-dark">SQL</span>
            </div>

            <div class="flex flex-col items-center group cursor-pointer">
                <div class="progress-ring w-24 h-24 mb-4 shadow-sm group-hover:shadow-md transition-all duration-300 transform group-hover:scale-110" style="--progress: 80deg;">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center text-3xl text-orange-500">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                </div>
                <span class="font-bold text-brand-dark">Veri Bilimi</span>
            </div>

            <div class="flex flex-col items-center group cursor-pointer">
                <div class="progress-ring w-24 h-24 mb-4 shadow-sm group-hover:shadow-md transition-all duration-300 transform group-hover:scale-110" style="--progress: 70deg;">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center text-3xl text-blue-600">
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
                <span class="font-bold text-brand-dark">OpenCV</span>
            </div>

        </div>
    </div>
</section>

<section id="projects" class="py-20 bg-gray-100">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-brand-dark mb-12 text-center">Projelerim</h2>

        @if(isset($projects) && $projects->count() > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                    <div class="bg-white rounded-3xl shadow hover:shadow-2xl transition duration-300 group cursor-pointer border border-transparent hover:border-brand-yellow overflow-hidden flex flex-col h-full">

                        <div class="h-48 overflow-hidden relative">
                            <img src="{{ asset('img/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                            <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition"></div>
                        </div>

                        <div class="p-8 flex-1 flex flex-col">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-xl font-bold text-brand-dark group-hover:text-brand-yellow transition">{{ $project->title }}</h3>

                                @if($project->link)
                                    <a href="{{ $project->link }}" target="_blank" class="text-gray-300 hover:text-brand-yellow transition">
                                        <i class="fas fa-external-link-alt text-lg"></i>
                                    </a>
                                @endif
                            </div>

                            <p class="text-gray-600 mb-6 leading-relaxed text-sm flex-1">
                                {{ Str::limit($project->description, 120) }}
                            </p>

                            <div class="flex flex-wrap gap-2 mt-auto">
                                @foreach(explode(',', $project->tags) as $tag)
                                    <span class="bg-brand-dark/5 text-brand-dark text-xs font-bold px-3 py-1 rounded-full border border-brand-dark/10">
                                        {{ trim($tag) }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center bg-white p-10 rounded-3xl shadow">
                <p class="text-gray-500 text-lg mb-4">Henüz eklenmiş bir proje bulunmuyor.</p>
                <a href="{{ route('projects.create') }}" class="inline-block bg-brand-yellow text-white px-6 py-2 rounded-full font-bold hover:bg-brand-dark transition">
                    İlk Projeni Ekle 🚀
                </a>
            </div>
        @endif
    </div>
</section>

<section id="contact" class="bg-brand-dark text-white py-12 text-center border-t border-white/10 relative">
    <h2 class="text-2xl font-bold mb-4">Birlikte Çalışalım</h2>
    <p class="text-gray-400 mb-6 max-w-lg mx-auto">Staj olanakları veya projeler için iletişime geçebilirsiniz.</p>

    <div class="space-y-2 mb-8">
        <a href="mailto:meralhamarat24@gmail.com" class="text-brand-yellow text-xl font-bold hover:underline block">meralhamarat24@gmail.com</a>
        <p class="text-sm text-gray-400">İstanbul / Türkiye</p>
    </div>

    <div class="flex justify-center space-x-6 mb-8">
        <a href="https://github.com/meralhamarat" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-brand-yellow hover:text-brand-dark transition"><i class="fab fa-github"></i></a>
        <a href="https://www.linkedin.com/in/meral-hamarat-a2702b252/" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-brand-yellow hover:text-brand-dark transition"><i class="fab fa-linkedin-in"></i></a>
    </div>

    <div class="text-xs text-gray-500">
        &copy; 2026 Meral Hamarat.
    </div>

    <div class="fixed bottom-4 right-4 z-50 opacity-50 hover:opacity-100 transition">
        <a href="{{ route('projects.create') }}" class="bg-red-600 text-white w-10 h-10 flex items-center justify-center rounded-full shadow-lg" title="Proje Ekle">
            <i class="fas fa-plus"></i>
        </a>
    </div>
</section>

<script>
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    const links = document.querySelectorAll('.mobile-link');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    links.forEach(link => {
        link.addEventListener('click', () => {
            menu.classList.add('hidden');
        });
    });
</script>
</body>
</html>
