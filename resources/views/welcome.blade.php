<!DOCTYPE html>
<html lang="ru" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FORRIS — экосистема e-commerce, IT-продуктов и бизнес-решений">
    <title>FORRIS — Экосистема цифровых решений</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-dark-900 text-gray-300 font-sans antialiased overflow-x-hidden">

    {{-- Navigation --}}
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="#" class="flex items-center gap-2">
                <div class="w-9 h-9 bg-gradient-to-br from-forest-400 to-forest-600 rounded-lg flex items-center justify-center">
                    <span class="text-white font-extrabold text-lg">F</span>
                </div>
                <span class="text-xl font-bold text-white tracking-tight">FORRIS</span>
            </a>

            <div class="hidden md:flex items-center gap-8">
                <a href="#products" class="text-sm text-gray-400 hover:text-white transition-colors">Продукты</a>
                <a href="#features" class="text-sm text-gray-400 hover:text-white transition-colors">Возможности</a>
                <a href="#about" class="text-sm text-gray-400 hover:text-white transition-colors">О нас</a>
                <a href="#contact" class="text-sm text-gray-400 hover:text-white transition-colors">Контакты</a>
                <a href="#contact" class="text-sm font-medium px-5 py-2 rounded-lg bg-forest-600 text-white hover:bg-forest-500 transition-colors">Начать</a>
            </div>

            <button id="mobile-toggle" class="md:hidden text-white cursor-pointer" aria-label="Menu">
                <svg id="menu-open" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg id="menu-close" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" class="hidden">
                    <path d="M6 6l12 12M6 18L18 6"/>
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="md:hidden hidden bg-dark-900/95 backdrop-blur-xl border-b border-white/5 px-6 pb-6 space-y-4">
            <a href="#products" class="block text-gray-300 hover:text-white">Продукты</a>
            <a href="#features" class="block text-gray-300 hover:text-white">Возможности</a>
            <a href="#about" class="block text-gray-300 hover:text-white">О нас</a>
            <a href="#contact" class="block text-gray-300 hover:text-white">Контакты</a>
            <a href="#contact" class="block text-center font-medium px-5 py-2.5 rounded-lg bg-forest-600 text-white">Начать</a>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        {{-- Background Effects --}}
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-forest-600/15 rounded-full blur-[120px]"></div>
            <div class="absolute bottom-0 left-1/4 w-[400px] h-[400px] bg-forest-500/10 rounded-full blur-[100px]"></div>
            <div class="absolute top-1/3 right-1/4 w-[300px] h-[300px] bg-emerald-500/8 rounded-full blur-[80px]"></div>
        </div>

        {{-- Grid pattern --}}
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 60px 60px;"></div>

        <div class="relative z-10 max-w-5xl mx-auto px-6 text-center pt-20">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-forest-500/10 border border-forest-500/20 mb-8">
                <span class="w-2 h-2 rounded-full bg-forest-400 animate-pulse"></span>
                <span class="text-forest-300 text-sm font-medium">Экосистема цифровых решений</span>
            </div>

            <h1 class="text-5xl sm:text-6xl lg:text-8xl font-extrabold text-white leading-[1.05] tracking-tight mb-6">
                Будущее начинается
                <br>
                <span class="bg-gradient-to-r from-forest-300 via-forest-400 to-emerald-400 bg-clip-text text-transparent">с FORRIS</span>
            </h1>

            <p class="text-lg sm:text-xl text-gray-400 max-w-2xl mx-auto mb-10 leading-relaxed">
                Интернет-магазин, маркетплейсы, IT-продукты и бизнес-решения —
                всё под одним брендом. От e-commerce до Digital Signage.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#products" class="w-full sm:w-auto px-8 py-3.5 rounded-xl bg-forest-600 text-white font-semibold text-base hover:bg-forest-500 transition-all hover:shadow-[0_0_30px_rgba(34,197,94,0.3)] active:scale-95">
                    Изучить продукты
                </a>
                <a href="#about" class="w-full sm:w-auto px-8 py-3.5 rounded-xl border border-white/10 text-white font-semibold text-base hover:bg-white/5 transition-all active:scale-95">
                    Узнать больше
                </a>
            </div>

            {{-- Stats --}}
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 mt-20 pt-10 border-t border-white/5">
                <div>
                    <div class="text-3xl sm:text-4xl font-bold text-white">7+</div>
                    <div class="text-sm text-gray-500 mt-1">Продуктов</div>
                </div>
                <div>
                    <div class="text-3xl sm:text-4xl font-bold text-white">E-com</div>
                    <div class="text-sm text-gray-500 mt-1">Маркетплейсы</div>
                </div>
                <div>
                    <div class="text-3xl sm:text-4xl font-bold text-white">HoReCa</div>
                    <div class="text-sm text-gray-500 mt-1">POS-системы</div>
                </div>
                <div>
                    <div class="text-3xl sm:text-4xl font-bold text-white">SaaS</div>
                    <div class="text-sm text-gray-500 mt-1">IT-решения</div>
                </div>
            </div>
        </div>

        {{-- Scroll indicator --}}
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2">
            <span class="text-xs text-gray-500">Прокрутите вниз</span>
            <div class="w-5 h-8 rounded-full border-2 border-gray-600 flex items-start justify-center p-1">
                <div class="w-1 h-2 rounded-full bg-forest-400 animate-bounce"></div>
            </div>
        </div>
    </section>

    {{-- Products Section --}}
    <section id="products" class="py-24 sm:py-32 relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-forest-400 text-sm font-semibold uppercase tracking-widest">Наши продукты</span>
                <h2 class="text-4xl sm:text-5xl font-bold text-white mt-3 tracking-tight">Экосистема FORRIS</h2>
                <p class="text-gray-400 mt-4 max-w-xl mx-auto">
                    От интернет-магазина и маркетплейсов до POS-систем, фулфилмента и Digital Signage
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @php
                $products = [
                    ['icon' => '🛒', 'name' => 'FORRIS Store', 'desc' => 'Собственный интернет-магазин бренда FORRIS — широкий ассортимент товаров с быстрой доставкой и удобным оформлением заказов', 'color' => 'from-emerald-500/20 to-emerald-500/5', 'border' => 'border-emerald-500/20'],
                    ['icon' => '🏪', 'name' => 'FORRIS на маркетплейсах', 'desc' => 'Официальные магазины бренда FORRIS на ведущих маркетплейсах — покупайте там, где вам удобно', 'color' => 'from-blue-500/20 to-blue-500/5', 'border' => 'border-blue-500/20'],
                    ['icon' => '🧠', 'name' => 'SellerMind', 'desc' => 'Умная платформа для продавцов — аналитика продаж, управление товарами и автоматизация работы на маркетплейсах', 'color' => 'from-violet-500/20 to-violet-500/5', 'border' => 'border-violet-500/20'],
                    ['icon' => '📦', 'name' => 'Risment', 'desc' => 'Фулфилмент-сервис для селлеров — хранение, упаковка и отправка товаров. Полный цикл логистики под ключ', 'color' => 'from-amber-500/20 to-amber-500/5', 'border' => 'border-amber-500/20'],
                    ['icon' => '🍽️', 'name' => 'RestoPos', 'desc' => 'POS-система для ресторанов и кафе — приём заказов, управление меню, аналитика и контроль кухни в реальном времени', 'color' => 'from-rose-500/20 to-rose-500/5', 'border' => 'border-rose-500/20'],
                    ['icon' => '💳', 'name' => 'Paynes', 'desc' => 'Кассовая система нового поколения — быстрые расчёты, фискализация, интеграция с банками и учёт продаж', 'color' => 'from-cyan-500/20 to-cyan-500/5', 'border' => 'border-cyan-500/20'],
                    ['icon' => '📺', 'name' => 'SILON', 'desc' => 'Система управления медиаконтентом для экранов. Централизованное управление и трансляция контента на мониторах по всему миру', 'color' => 'from-purple-500/20 to-purple-500/5', 'border' => 'border-purple-500/20'],
                ];
                @endphp

                @foreach($products as $product)
                <div class="group relative p-6 rounded-2xl bg-gradient-to-b {{ $product['color'] }} border {{ $product['border'] }} hover:scale-[1.02] transition-all duration-300 cursor-pointer">
                    <div class="text-4xl mb-4">{{ $product['icon'] }}</div>
                    <h3 class="text-xl font-bold text-white mb-2">{{ $product['name'] }}</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">{{ $product['desc'] }}</p>
                    <div class="mt-4 flex items-center gap-1 text-forest-400 text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity">
                        Подробнее
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" class="translate-x-0 group-hover:translate-x-1 transition-transform">
                            <path d="M5 12l6-6M11 6H5M11 6v6"/>
                        </svg>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Features Section --}}
    <section id="features" class="py-24 sm:py-32 relative">
        <div class="absolute inset-0">
            <div class="absolute top-1/2 left-0 w-[500px] h-[500px] bg-forest-600/8 rounded-full blur-[120px]"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-forest-400 text-sm font-semibold uppercase tracking-widest">Почему FORRIS</span>
                <h2 class="text-4xl sm:text-5xl font-bold text-white mt-3 tracking-tight">Преимущества платформы</h2>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                $features = [
                    ['title' => 'Полная экосистема', 'desc' => 'Интернет-магазин, маркетплейсы, фулфилмент, POS и аналитика — всё работает вместе под брендом FORRIS', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                    ['title' => 'Мультиканальные продажи', 'desc' => 'Продаём через собственный магазин и все ведущие маркетплейсы — максимальный охват аудитории', 'icon' => 'M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5'],
                    ['title' => 'Инструменты для селлеров', 'desc' => 'SellerMind и Risment помогают продавцам масштабировать бизнес — от аналитики до полного фулфилмента', 'icon' => 'M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8zM23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75'],
                    ['title' => 'HoReCa решения', 'desc' => 'RestoPos и Paynes автоматизируют работу ресторанов и кафе — от приёма заказов до фискализации', 'icon' => 'M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z'],
                    ['title' => 'Digital Signage', 'desc' => 'SILON позволяет централизованно управлять и транслировать медиаконтент на экранах в любой точке мира', 'icon' => 'M12 6V2m0 4a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V9m6 3H6m12 0a2 2 0 100 4m0-4a2 2 0 110 4m0 0v2m0-6V9'],
                    ['title' => 'Собственные технологии', 'desc' => 'Все продукты разработаны внутри компании — полный контроль качества, быстрые обновления и развитие', 'icon' => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9'],
                ];
                @endphp

                @foreach($features as $feature)
                <div class="group p-6">
                    <div class="w-12 h-12 rounded-xl bg-forest-500/10 border border-forest-500/20 flex items-center justify-center text-forest-400 mb-4 group-hover:bg-forest-500/20 transition-colors">
                        <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path d="{{ $feature['icon'] }}" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">{{ $feature['title'] }}</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">{{ $feature['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- About / CTA Section --}}
    <section id="about" class="py-24 sm:py-32 relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="relative rounded-3xl overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-forest-900/80 via-dark-800 to-dark-900"></div>
                <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,rgba(34,197,94,0.15),transparent_60%)]"></div>
                <div class="absolute inset-0 opacity-[0.04]" style="background-image: radial-gradient(circle, rgba(255,255,255,0.3) 1px, transparent 1px); background-size: 24px 24px;"></div>

                <div class="relative p-10 sm:p-16 lg:p-20">
                    <div class="max-w-3xl">
                        <span class="text-forest-400 text-sm font-semibold uppercase tracking-widest">О компании</span>
                        <h2 class="text-3xl sm:text-5xl font-bold text-white mt-3 tracking-tight leading-tight">
                            Мы создаём технологии,<br>которые вдохновляют
                        </h2>
                        <p class="text-gray-400 mt-6 text-lg leading-relaxed max-w-2xl">
                            FORRIS — это экосистема, объединяющая e-commerce, IT-продукты
                            и бизнес-решения. Мы развиваем собственный интернет-магазин,
                            работаем на крупнейших маркетплейсах и создаём технологии для
                            селлеров, ресторанов и бизнеса — от аналитики продаж до
                            управления медиаконтентом на экранах по всему миру.
                        </p>

                        <div class="flex flex-col sm:flex-row gap-4 mt-10">
                            <a href="#contact" class="inline-flex items-center justify-center px-8 py-3.5 rounded-xl bg-white text-dark-900 font-semibold text-base hover:bg-gray-100 transition-all active:scale-95">
                                Связаться с нами
                            </a>
                            <a href="#products" class="inline-flex items-center justify-center px-8 py-3.5 rounded-xl border border-white/20 text-white font-semibold text-base hover:bg-white/5 transition-all active:scale-95">
                                Наши продукты
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Section --}}
    <section id="contact" class="py-24 sm:py-32 relative">
        <div class="max-w-3xl mx-auto px-6 text-center">
            <span class="text-forest-400 text-sm font-semibold uppercase tracking-widest">Контакты</span>
            <h2 class="text-4xl sm:text-5xl font-bold text-white mt-3 tracking-tight">Давайте начнём вместе</h2>
            <p class="text-gray-400 mt-4 max-w-xl mx-auto">
                Оставьте заявку и наша команда свяжется с вами в ближайшее время
            </p>

            <form method="POST" action="#" class="mt-12 space-y-4 text-left">
                @csrf
                <div class="grid sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm text-gray-400 mb-1.5">Имя</label>
                        <input type="text" name="name" placeholder="Ваше имя" class="w-full px-4 py-3 rounded-xl bg-dark-700 border border-white/10 text-white placeholder-gray-500 focus:outline-none focus:border-forest-500/50 focus:ring-1 focus:ring-forest-500/50 transition-colors">
                    </div>
                    <div>
                        <label class="block text-sm text-gray-400 mb-1.5">Email</label>
                        <input type="email" name="email" placeholder="you@example.com" class="w-full px-4 py-3 rounded-xl bg-dark-700 border border-white/10 text-white placeholder-gray-500 focus:outline-none focus:border-forest-500/50 focus:ring-1 focus:ring-forest-500/50 transition-colors">
                    </div>
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Сообщение</label>
                    <textarea name="message" rows="4" placeholder="Расскажите о вашем проекте..." class="w-full px-4 py-3 rounded-xl bg-dark-700 border border-white/10 text-white placeholder-gray-500 focus:outline-none focus:border-forest-500/50 focus:ring-1 focus:ring-forest-500/50 transition-colors resize-none"></textarea>
                </div>
                <button type="submit" class="w-full py-3.5 rounded-xl bg-forest-600 text-white font-semibold text-base hover:bg-forest-500 transition-all hover:shadow-[0_0_30px_rgba(34,197,94,0.3)] active:scale-[0.98] cursor-pointer">
                    Отправить заявку
                </button>
            </form>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="border-t border-white/5 py-12">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-10">
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-8 h-8 bg-gradient-to-br from-forest-400 to-forest-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-extrabold text-sm">F</span>
                        </div>
                        <span class="text-lg font-bold text-white">FORRIS</span>
                    </div>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        E-commerce, IT-продукты и бизнес-решения под одним брендом.
                    </p>
                </div>

                <div>
                    <h4 class="text-sm font-semibold text-white mb-4">Продукты</h4>
                    <div class="space-y-2.5">
                        <a href="#products" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">FORRIS Store</a>
                        <a href="#products" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">SellerMind</a>
                        <a href="#products" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">Risment</a>
                        <a href="#products" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">RestoPos</a>
                        <a href="#products" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">Paynes</a>
                        <a href="#products" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">SILON</a>
                    </div>
                </div>

                <div>
                    <h4 class="text-sm font-semibold text-white mb-4">Компания</h4>
                    <div class="space-y-2.5">
                        <a href="#about" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">О нас</a>
                        <a href="#" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">Карьера</a>
                        <a href="#" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">Блог</a>
                        <a href="#contact" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">Контакты</a>
                    </div>
                </div>

                <div>
                    <h4 class="text-sm font-semibold text-white mb-4">Соцсети</h4>
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 rounded-lg bg-dark-700 border border-white/5 flex items-center justify-center text-gray-400 hover:text-white hover:bg-dark-600 transition-colors" title="Telegram">
                            <span class="text-xs font-bold">T</span>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-dark-700 border border-white/5 flex items-center justify-center text-gray-400 hover:text-white hover:bg-dark-600 transition-colors" title="GitHub">
                            <span class="text-xs font-bold">G</span>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-dark-700 border border-white/5 flex items-center justify-center text-gray-400 hover:text-white hover:bg-dark-600 transition-colors" title="Instagram">
                            <span class="text-xs font-bold">I</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-12 pt-8 border-t border-white/5 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-sm text-gray-600">&copy; {{ date('Y') }} FORRIS. Все права защищены.</p>
                <div class="flex gap-6">
                    <a href="#" class="text-sm text-gray-600 hover:text-gray-400 transition-colors">Конфиденциальность</a>
                    <a href="#" class="text-sm text-gray-600 hover:text-gray-400 transition-colors">Условия</a>
                </div>
            </div>
        </div>
    </footer>

    {{-- Navbar scroll effect & mobile menu --}}
    <script>
        const navbar = document.getElementById('navbar');
        const toggle = document.getElementById('mobile-toggle');
        const menu = document.getElementById('mobile-menu');
        const menuOpen = document.getElementById('menu-open');
        const menuClose = document.getElementById('menu-close');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                navbar.classList.add('bg-dark-900/80', 'backdrop-blur-xl', 'border-b', 'border-white/5');
            } else {
                navbar.classList.remove('bg-dark-900/80', 'backdrop-blur-xl', 'border-b', 'border-white/5');
            }
        });

        toggle.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            menuOpen.classList.toggle('hidden');
            menuClose.classList.toggle('hidden');
        });

        menu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
                menuOpen.classList.remove('hidden');
                menuClose.classList.add('hidden');
            });
        });
    </script>
</body>
</html>
