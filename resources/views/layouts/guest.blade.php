<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MuscleHub') }}</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Optional icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Vite assets (Tailwind / app css if present) -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            :root{
                --bg-900: #071024; /* deep navy */
                --card-800: #0b1a2b; /* card dark */
                --accent: #06b6d4; /* cyan */
                --muted: #94a3b8;
            }
            body { background: radial-gradient(1200px 600px at 10% 20%, rgba(6,182,212,0.08), transparent), var(--bg-900); color: #e6eef6; }
            .auth-card { max-width: 460px; border-radius: 12px; background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01)); border: 1px solid rgba(255,255,255,0.03); }
            .brand { font-weight: 700; letter-spacing: -0.5px; color: var(--accent); }
            .card-body { color: #dbeafe; }
            a.text-muted { color: var(--muted); }
            .form-control, input[type="email"], input[type="password"], input[type="text"], select {
                background: rgba(255,255,255,0.03);
                border: 1px solid rgba(255,255,255,0.06);
                color: #e6eef6;
            }
            .btn-accent {
                background: var(--accent);
                color: #041124;
                border: none;
            }
            .btn-accent:hover { filter: brightness(0.95); }
            .link-light { color: #a7f3d0; text-decoration: none; }
            .small-muted { color: var(--muted); }
        </style>
    </head>
    <body>
        <div class="d-flex align-items-center justify-content-center min-vh-100">
            <div class="card auth-card shadow-sm">
                <div class="card-body p-4 p-sm-5">
                    <div class="text-center mb-4">
                        <a href="{{ route('home') }}" class="text-decoration-none text-dark">
                            <h2 class="brand mb-0">MuscleHub</h2>
                            <small class="text-white">Panel de usuarios</small>
                        </a>
                    </div>

                    {{ $slot }}

                    <div class="text-center mt-3">
                        <small class="text-white">¿Necesitas ayuda? Contacta al administrador.</small>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
