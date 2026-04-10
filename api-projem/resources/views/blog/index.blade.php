<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog | Meral Hamarat</title>
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
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

<nav class="fixed top-0 w-full bg-brand-dark text-white z-50 shadow-lg">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center h-20">
            <a href="{{ route('home') }}" class="text-2xl font-bold tracking-wider text-brand-yellow hover:text-white transition">
                Meral.<span class="text-white">H</span>
            </a>
            <div class="hidden md:flex space-x-8 text-sm font-medium">
                <a href="{{ route('home') }}" class="hover:text-brand-yellow transition">Ana Sayfa</a>
                <a href="#" class="text-brand-yellow font-bold">Blog</a> </div>
        </div>
    </div>
</nav>

<section class="bg-brand-dark pt-32 pb-16 text-center text-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
    <div class="max-w-4xl mx-auto px-6 relative z-10">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Teknoloji Günlüğüm</h1>
        <p class="text-gray-300 text-lg">Yazılım, Yapay Zeka ve Öğrendiklerim Üzerine Notlar</p>
    </div>
</section>

<section class="py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-3 gap-8">

            @foreach($posts as $post)
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 group cursor-pointer border border-gray-100">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                    </div>

                    <div class="p-6">
                        <div class="text-xs text-brand-yellow font-bold uppercase tracking-wider mb-2">
                            {{ $post['date'] }}
                        </div>
                        <h3 class="text-xl font-bold text-brand-dark mb-3 group-hover:text-brand-green transition">
                            {{ $post['title'] }}
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            {{ $post['excerpt'] }}
                        </p>
                        <span class="text-brand-dark font-bold text-sm border-b-2 border-brand-yellow pb-1">Devamını Oku →</span>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

<footer class="bg-brand-dark text-white py-8 text-center border-t border-white/10">
    <div class="text-sm text-gray-400">
        &copy; 2026 Meral Hamarat. Tüm hakları saklıdır.
        <div class="mt-2">
            <a href="{{ route('home') }}" class="text-brand-yellow hover:underline">Ana Sayfaya Dön</a>
        </div>
    </div>
</footer>

</body>
</html>
