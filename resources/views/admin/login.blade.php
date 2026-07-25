<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin — SampahKita</title>
    <meta name="description" content="Halaman login admin panel SampahKita Desa Balonggandu">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&family=Be+Vietnam+Pro:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@400,0..1&display=block" rel="stylesheet">
    <style>
        * { font-family: 'Be Vietnam Pro', sans-serif; }
        h1,h2,h3 { font-family: 'Plus Jakarta Sans', sans-serif; }
        .fill-icon { font-variation-settings: 'FILL' 1; }

        /* Animated gradient background */
        .bg-animated {
            background: linear-gradient(135deg, #012d1d 0%, #1b4332 30%, #2d6a4f 60%, #012d1d 100%);
            background-size: 400% 400%;
            animation: gradientShift 8s ease infinite;
        }
        @keyframes gradientShift {
            0%   { background-position: 0% 50%; }
            50%  { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Floating particles */
        .particle {
            position: absolute;
            border-radius: 50%;
            background: rgba(161, 208, 185, 0.08);
            animation: float linear infinite;
        }
        @keyframes float {
            0%   { transform: translateY(100vh) rotate(0deg); opacity: 0; }
            10%  { opacity: 1; }
            90%  { opacity: 1; }
            100% { transform: translateY(-100px) rotate(720deg); opacity: 0; }
        }

        /* Card glassmorphism */
        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Input focus ring */
        .input-field {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: white;
            transition: all 0.3s ease;
        }
        .input-field:focus {
            background: rgba(255, 255, 255, 0.12);
            border-color: rgba(161, 208, 185, 0.6);
            box-shadow: 0 0 0 3px rgba(161, 208, 185, 0.15);
            outline: none;
        }
        .input-field::placeholder { color: rgba(255,255,255,0.4); }

        /* Submit button */
        .btn-login {
            background: linear-gradient(135deg, #a5d0b9, #c1ecd4);
            color: #012d1d;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .btn-login::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(255,255,255,0.3), transparent);
            opacity: 0;
            transition: opacity 0.3s;
        }
        .btn-login:hover::after { opacity: 1; }
        .btn-login:hover { transform: translateY(-1px); box-shadow: 0 8px 25px rgba(165,208,185,0.3); }
        .btn-login:active { transform: translateY(0); }

        /* Shake animation for error */
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-6px); }
            20%, 40%, 60%, 80% { transform: translateX(6px); }
        }
        .shake { animation: shake 0.5s ease; }

        /* Fade in up */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .fade-in-up { animation: fadeInUp 0.6s ease forwards; }
        .delay-1 { animation-delay: 0.1s; opacity: 0; }
        .delay-2 { animation-delay: 0.2s; opacity: 0; }
        .delay-3 { animation-delay: 0.3s; opacity: 0; }

        /* Eye toggle */
        #toggle-password { cursor: pointer; user-select: none; }
    </style>
</head>
<body class="bg-animated min-h-screen flex items-center justify-center p-4 relative overflow-hidden">

    <!-- Floating Particles -->
    <div class="particle" style="width:80px;height:80px;left:10%;animation-duration:15s;animation-delay:0s;"></div>
    <div class="particle" style="width:40px;height:40px;left:25%;animation-duration:20s;animation-delay:3s;"></div>
    <div class="particle" style="width:120px;height:120px;left:50%;animation-duration:18s;animation-delay:6s;"></div>
    <div class="particle" style="width:60px;height:60px;left:70%;animation-duration:12s;animation-delay:1s;"></div>
    <div class="particle" style="width:90px;height:90px;left:85%;animation-duration:22s;animation-delay:4s;"></div>
    <div class="particle" style="width:30px;height:30px;left:5%;animation-duration:16s;animation-delay:8s;"></div>

    <!-- Login Card -->
    <div class="w-full max-w-[420px] relative z-10">

        <!-- Logo Area -->
        <div class="text-center mb-8 fade-in-up delay-1">
            <div class="w-20 h-20 rounded-3xl bg-white/10 border border-white/20 flex items-center justify-center mx-auto mb-4 shadow-2xl">
                <span class="material-symbols-outlined text-[#a5d0b9] fill-icon text-[40px]">recycling</span>
            </div>
            <h1 class="text-[26px] font-extrabold text-white leading-tight">SampahKita</h1>
            <p class="text-[13px] text-[#a5d0b9]/80 mt-1">Admin Panel · Desa Balonggandu</p>
        </div>

        <!-- Card -->
        <div class="glass-card rounded-3xl p-8 shadow-2xl fade-in-up delay-2" id="login-card">

            <h2 class="text-[20px] font-bold text-white mb-1">Selamat Datang 👋</h2>
            <p class="text-[13px] text-white/50 mb-7">Masuk untuk mengelola konten website</p>

            <!-- Error Alert -->
            @if ($errors->has('login'))
                <div id="error-alert" class="flex items-start gap-3 bg-red-500/15 border border-red-400/30 rounded-2xl p-4 mb-6">
                    <span class="material-symbols-outlined text-red-400 fill-icon text-[20px] flex-shrink-0 mt-0.5">error</span>
                    <p class="text-[13px] text-red-300 leading-relaxed">{{ $errors->first('login') }}</p>
                </div>
            @endif

            <!-- Success Toast (from logout) -->
            @if (session('success'))
                <div class="flex items-start gap-3 bg-emerald-500/15 border border-emerald-400/30 rounded-2xl p-4 mb-6">
                    <span class="material-symbols-outlined text-emerald-400 fill-icon text-[20px] flex-shrink-0 mt-0.5">check_circle</span>
                    <p class="text-[13px] text-emerald-300 leading-relaxed">{{ session('success') }}</p>
                </div>
            @endif

            <!-- Form -->
            <form id="login-form" method="POST" action="{{ route('admin.login.post') }}">
                @csrf

                <!-- Email -->
                <div class="mb-5">
                    <label class="block text-[13px] font-semibold text-white/70 mb-2">Email Admin</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-white/40 text-[20px]">alternate_email</span>
                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="admin@balonggandu.desa.id"
                            autocomplete="email"
                            required
                            class="input-field w-full pl-11 pr-4 py-3.5 rounded-xl text-[14px] font-medium"
                        >
                    </div>
                    @error('email')
                        <p class="text-[12px] text-red-400 mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-7">
                    <label class="block text-[13px] font-semibold text-white/70 mb-2">Password</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-white/40 text-[20px]">lock</span>
                        <input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="••••••••"
                            autocomplete="current-password"
                            required
                            class="input-field w-full pl-11 pr-12 py-3.5 rounded-xl text-[14px] font-medium"
                        >
                        <button type="button" id="toggle-password"
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-white/40 hover:text-white/70 transition-colors">
                            <span class="material-symbols-outlined text-[20px]" id="eye-icon">visibility</span>
                        </button>
                    </div>
                    @error('password')
                        <p class="text-[12px] text-red-400 mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit -->
                <button type="submit" id="submit-btn"
                    class="btn-login w-full py-4 rounded-xl font-bold text-[15px] flex items-center justify-center gap-2">
                    <span id="btn-text">Masuk ke Dashboard</span>
                    <span class="material-symbols-outlined fill-icon text-[20px]" id="btn-icon">arrow_forward</span>
                    <!-- Spinner (hidden by default) -->
                    <svg id="btn-spinner" class="hidden w-5 h-5 animate-spin text-[#012d1d]" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                    </svg>
                </button>
            </form>

            <!-- Hint -->
            <p class="text-center text-[12px] text-white/30 mt-6 leading-relaxed">
                Hanya admin resmi yang dapat mengakses panel ini.<br>
                Hubungi pengelola jika mengalami masalah login.
            </p>
        </div>

        <!-- Footer -->
        <p class="text-center text-[12px] text-white/25 mt-6 fade-in-up delay-3">
            © {{ date('Y') }} SampahKita · Desa Balonggandu, Karawang
        </p>
    </div>

<script>
    // Toggle password visibility
    document.getElementById('toggle-password').addEventListener('click', function () {
        const input   = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');
        if (input.type === 'password') {
            input.type   = 'text';
            eyeIcon.textContent = 'visibility_off';
        } else {
            input.type   = 'password';
            eyeIcon.textContent = 'visibility';
        }
    });

    // Show spinner on submit
    document.getElementById('login-form').addEventListener('submit', function () {
        const btn     = document.getElementById('submit-btn');
        const text    = document.getElementById('btn-text');
        const icon    = document.getElementById('btn-icon');
        const spinner = document.getElementById('btn-spinner');
        text.textContent = 'Memverifikasi...';
        icon.classList.add('hidden');
        spinner.classList.remove('hidden');
        btn.disabled = true;
    });

    // Shake card if there's an error
    @if ($errors->has('login'))
        document.getElementById('login-card').classList.add('shake');
    @endif
</script>
</body>
</html>
