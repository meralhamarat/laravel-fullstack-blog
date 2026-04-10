<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli - Proje Ekle</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Yeni Proje Ekle</h2>

        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
@csrf <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2">Proje Başlığı</label>
    <input type="text" name="title" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Örn: E-Ticaret Sitesi" required>
</div>

<div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2">Açıklama</label>
    <textarea name="description" rows="3" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Proje ne hakkında?" required></textarea>
</div>

<div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2">Kullanılan Teknolojiler</label>
    <input type="text" name="tags" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Örn: PHP, Laravel, React" required>
</div>

<div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2">Proje Linki (Github/Site)</label>
    <input type="text" name="link" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="https://github.com/...">
</div>

<div class="mb-6">
    <label class="block text-gray-700 text-sm font-bold mb-2">Proje Görseli</label>
    <input type="file" name="image" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" required>
</div>

<button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
    Projeyi Kaydet
</button>
</form>

<div class="mt-4 text-center">
    <a href="{{ route('home') }}" class="text-sm text-gray-500 hover:text-gray-800">← Ana Sayfaya Dön</a>
</div>
</div>

</body>
</html>
