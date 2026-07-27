<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Aparatur Desa — Bank Digital 3R</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-900 text-white min-h-screen flex items-center justify-center p-4">
    <div class="max-w-md w-full bg-slate-800 p-8 rounded-3xl border border-slate-700 shadow-xl">
        <div class="text-center mb-6">
            <h1 class="text-2xl font-extrabold text-white">Login Aparatur Desa</h1>
            <p class="text-xs text-blue-400 mt-1">Panel Pengelolaan Data Digital 3R</p>
        </div>

        @if($errors->any())
            <div class="mb-4 p-3 bg-red-500/20 border border-red-500/30 text-red-200 text-xs rounded-xl">
                {{ $errors->first('login') ?: 'Terjadi kesalahan pada input data.' }}
            </div>
        @endif

        <form action="/admin/bank-digital/login" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-bold text-gray-300 mb-1">Email</label>
                <input type="email" name="email" required value="{{ old('email') }}" class="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-xs text-white focus:outline-none focus:border-blue-500">
            </div>
            <div>
                <label class="block text-xs font-bold text-gray-300 mb-1">Password</label>
                <input type="password" name="password" required class="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-xs text-white focus:outline-none focus:border-blue-500">
            </div>
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl transition-all text-xs shadow-md">
                Masuk ke Panel 3R
            </button>
        </form>
        <div class="mt-6 text-center">
            <a href="/bank-digital" class="text-[11px] text-gray-400 hover:text-white">← Kembali ke Portal Warga 3R</a>
        </div>
    </div>
</body>
</html>