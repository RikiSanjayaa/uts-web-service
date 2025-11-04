<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UTS Web Service')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background-image: url('/images/bckground.webp');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            z-index: -1;
        }

        /* Navigation Styles */
        nav {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            padding: 0.8rem 2rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 1000;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
        }

        .nav-left {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }

        .nav-left a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            padding: 0.6rem 1.2rem;
            border-radius: 4px;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .nav-left a:hover {
            background-color: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }

        .nav-left a.active {
            font-weight: bold;
            /* background-color: rgba(52, 152, 219, 0.8); */
        }

        .nav-student {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: white;

        }

        /* Main Content */
        main {
            min-height: calc(100vh - 140px);
        }

        /* Footer Styles */
        footer {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            color: white;
            text-align: center;
            padding: 1.5rem;
            margin-top: 2rem;
            box-shadow: 0 -4px 12px rgba(0, 0, 0, 0.3);
        }

        footer p {
            font-size: 0.95rem;
            opacity: 0.9;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <div class="nav-left">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            </div>
            <div class="nav-student">2301010051 - I MADE RIKI WIDIASTANA SANJAYA (GANJIL)</div>
            <div class="nav-student">2301010022 - ENDAH KOMARIYAH LESTARI (GENAP)</div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} UTS Web Service Project - Laravel</p>
    </footer>
</body>

</html>
