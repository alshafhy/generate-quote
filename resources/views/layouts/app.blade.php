<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'نظام المركبات')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <div class="dashboard-container">
        @include('partials.sidebar')

        <main class="main-content">
            @include('partials.header')

            <div class="content-area">
                @yield('content')
            </div>
        </main>
    </div>
    @stack('scripts')
</body>
</html>
