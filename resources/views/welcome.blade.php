<!DOCTYPE html>
<html lang="ru" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FORRIS — экосистема e-commerce, IT-продуктов и бизнес-решений. SellerMind, Risment, ForrisPos, SILON, FORRIS Travel.">
    <title>FORRIS — Экосистема цифровых решений</title>

    <link rel="icon" type="image/svg+xml" href="/images/logo-icon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-dark-900 text-gray-300 font-sans antialiased overflow-x-hidden">

    {{-- Navigation --}}
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="#" class="flex items-center gap-3">
                <img src="/images/logo.svg" alt="FORRIS" class="h-8">
            </a>

            <div class="hidden md:flex items-center gap-8">
                <a href="#ecosystem" class="text-sm text-gray-400 hover:text-white transition-colors">Экосистема</a>
                <a href="#products" class="text-sm text-gray-400 hover:text-white transition-colors">Продукты</a>
                <a href="#about" class="text-sm text-gray-400 hover:text-white transition-colors">О нас</a>
                <a href="#contact" class="text-sm text-gray-400 hover:text-white transition-colors">Контакты</a>
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
            <a href="#ecosystem" class="block text-gray-300 hover:text-white">Экосистема</a>
            <a href="#products" class="block text-gray-300 hover:text-white">Продукты</a>
            <a href="#about" class="block text-gray-300 hover:text-white">О нас</a>
            <a href="#contact" class="block text-gray-300 hover:text-white">Контакты</a>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/3 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-brand-gold/8 rounded-full blur-[120px]"></div>
            <div class="absolute bottom-1/4 right-1/4 w-[500px] h-[500px] bg-brand-purple/8 rounded-full blur-[120px]"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] bg-brand-blue/6 rounded-full blur-[100px]"></div>
        </div>

        <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 60px 60px;"></div>

        <div class="relative z-10 max-w-5xl mx-auto px-6 text-center pt-20">
            <img src="/images/logo.svg" alt="FORRIS" class="h-12 sm:h-14 mx-auto mb-10">

            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-extrabold text-white leading-[1.1] tracking-tight mb-6">
                Экосистема цифровых
                <br>
                <span class="bg-gradient-to-r from-brand-gold via-brand-purple to-brand-blue bg-clip-text text-transparent">решений для бизнеса</span>
            </h1>

            <p class="text-lg sm:text-xl text-gray-400 max-w-3xl mx-auto mb-10 leading-relaxed">
                FORRIS объединяет интернет-магазин, маркетплейсы, аналитику для селлеров,
                фулфилмент, POS-системы для ресторанов, Digital Signage и туристический сервис —
                всё под одним брендом.
            </p>

            <a href="#products" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-xl bg-white text-dark-900 font-semibold text-base hover:bg-gray-200 transition-all hover:shadow-[0_0_30px_rgba(255,255,255,0.15)] active:scale-95">
                Наши продукты
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 8h8M8 4l4 4-4 4"/></svg>
            </a>

            {{-- Stats --}}
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 mt-20 pt-10 border-t border-white/5">
                <div>
                    <div class="text-3xl sm:text-4xl font-bold text-white">7</div>
                    <div class="text-sm text-gray-500 mt-1">Продуктов в экосистеме</div>
                </div>
                <div>
                    <div class="text-3xl sm:text-4xl font-bold text-white">4+</div>
                    <div class="text-sm text-gray-500 mt-1">Маркетплейса</div>
                </div>
                <div>
                    <div class="text-3xl sm:text-4xl font-bold text-white">B2B</div>
                    <div class="text-sm text-gray-500 mt-1">и B2C решения</div>
                </div>
                <div>
                    <div class="text-3xl sm:text-4xl font-bold text-white">UZ</div>
                    <div class="text-sm text-gray-500 mt-1">Сделано в Узбекистане</div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2">
            <span class="text-xs text-gray-500">Подробнее</span>
            <div class="w-5 h-8 rounded-full border-2 border-gray-600 flex items-start justify-center p-1">
                <div class="w-1 h-2 rounded-full bg-white animate-bounce"></div>
            </div>
        </div>
    </section>

    {{-- Ecosystem Overview --}}
    <section id="ecosystem" class="py-24 sm:py-32 relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-brand-gold text-sm font-semibold uppercase tracking-widest">Как это работает</span>
                <h2 class="text-3xl sm:text-5xl font-bold text-white mt-3 tracking-tight">Одна экосистема — все направления</h2>
                <p class="text-gray-400 mt-4 max-w-2xl mx-auto leading-relaxed">
                    FORRIS — это не просто набор продуктов. Это единая экосистема, где каждый сервис
                    дополняет другой: от продажи товаров на маркетплейсах до управления рестораном,
                    туристических услуг и трансляции контента на экранах.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="p-6 rounded-2xl bg-white/[0.02] border border-white/5">
                    <div class="w-10 h-10 rounded-lg bg-amber-500/10 flex items-center justify-center text-amber-400 mb-4">
                        <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M3 3h18v18H3z" stroke-linecap="round" stroke-linejoin="round"/><path d="M3 9h18M9 21V9" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <h3 class="text-white font-bold mb-1">E-commerce</h3>
                    <p class="text-gray-500 text-sm">Интернет-магазин и 4 маркетплейса</p>
                </div>
                <div class="p-6 rounded-2xl bg-white/[0.02] border border-white/5">
                    <div class="w-10 h-10 rounded-lg bg-blue-500/10 flex items-center justify-center text-blue-400 mb-4">
                        <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <h3 class="text-white font-bold mb-1">SaaS</h3>
                    <p class="text-gray-500 text-sm">SellerMind, Risment, SILON</p>
                </div>
                <div class="p-6 rounded-2xl bg-white/[0.02] border border-white/5">
                    <div class="w-10 h-10 rounded-lg bg-rose-500/10 flex items-center justify-center text-rose-400 mb-4">
                        <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <h3 class="text-white font-bold mb-1">HoReCa</h3>
                    <p class="text-gray-500 text-sm">ForrisPos для ресторанов и кафе</p>
                </div>
                <div class="p-6 rounded-2xl bg-white/[0.02] border border-white/5">
                    <div class="w-10 h-10 rounded-lg bg-emerald-500/10 flex items-center justify-center text-emerald-400 mb-4">
                        <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <h3 class="text-white font-bold mb-1">Travel</h3>
                    <p class="text-gray-500 text-sm">FORRIS Travel — туризм и путешествия</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Products Section --}}
    <section id="products" class="py-24 sm:py-32 relative">
        <div class="absolute inset-0">
            <div class="absolute top-1/3 right-0 w-[500px] h-[500px] bg-brand-purple/5 rounded-full blur-[120px]"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-brand-gold text-sm font-semibold uppercase tracking-widest">Продукты</span>
                <h2 class="text-3xl sm:text-5xl font-bold text-white mt-3 tracking-tight">Каждый продукт — отдельная сила</h2>
            </div>

            {{-- FORRIS Store --}}
            <div class="mb-8 p-8 sm:p-10 rounded-3xl bg-gradient-to-br from-amber-500/10 to-transparent border border-amber-500/15">
                <div class="flex flex-col lg:flex-row lg:items-start gap-8">
                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-3xl">🛒</span>
                            <h3 class="text-2xl sm:text-3xl font-bold text-white">FORRIS Store</h3>
                        </div>
                        <p class="text-gray-300 leading-relaxed mb-4">
                            Собственный интернет-магазин бренда FORRIS. Широкий ассортимент товаров
                            для дома, электроники и аксессуаров с удобным оформлением заказов,
                            быстрой доставкой по Узбекистану и гарантией качества.
                        </p>
                        <p class="text-gray-500 text-sm mb-6">
                            Также бренд FORRIS официально представлен на 4 крупнейших маркетплейсах
                            под брендом <strong class="text-gray-400">FORRIS HOME</strong>.
                        </p>
                        <div class="flex flex-wrap gap-3 mb-6">
                            <a href="https://store.forris.uz" target="_blank" class="px-3 py-1.5 rounded-lg bg-amber-500/10 border border-amber-500/20 text-amber-400 text-xs font-medium hover:bg-amber-500/20 transition-colors">FORRIS Store</a>
                            <a href="https://uzum.uz/ru/shop/qulay-uy" target="_blank" class="px-3 py-1.5 rounded-lg bg-white/5 border border-white/10 text-gray-300 text-xs font-medium hover:bg-white/10 transition-colors">Uzum Market</a>
                            <a href="https://www.wildberries.ru/seller/4043207" target="_blank" class="px-3 py-1.5 rounded-lg bg-white/5 border border-white/10 text-gray-300 text-xs font-medium hover:bg-white/10 transition-colors">Wildberries</a>
                            <a href="https://www.ozon.ru/seller/forris-home-uz-1988192/" target="_blank" class="px-3 py-1.5 rounded-lg bg-white/5 border border-white/10 text-gray-300 text-xs font-medium hover:bg-white/10 transition-colors">Ozon</a>
                            <a href="https://market.yandex.uz/business--forris-home/198398241" target="_blank" class="px-3 py-1.5 rounded-lg bg-white/5 border border-white/10 text-gray-300 text-xs font-medium hover:bg-white/10 transition-colors">Yandex Market</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- SellerMind --}}
            <div class="mb-8 p-8 sm:p-10 rounded-3xl bg-gradient-to-br from-blue-500/10 to-transparent border border-blue-500/15">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-3xl">🧠</span>
                    <h3 class="text-2xl sm:text-3xl font-bold text-white">SellerMind</h3>
                </div>
                <p class="text-gray-300 leading-relaxed mb-4">
                    Умная платформа управления продажами на маркетплейсах с элементами искусственного
                    интеллекта. SellerMind помогает селлерам анализировать продажи, отслеживать остатки,
                    управлять ценообразованием и автоматизировать рутинные операции на Uzum Market,
                    Wildberries, Ozon и Yandex Market из единого интерфейса.
                </p>
                <div class="flex flex-wrap gap-4 mb-6">
                    <span class="text-gray-500 text-sm">AI-аналитика</span>
                    <span class="text-gray-600">·</span>
                    <span class="text-gray-500 text-sm">Управление товарами</span>
                    <span class="text-gray-600">·</span>
                    <span class="text-gray-500 text-sm">Мультимаркетплейс</span>
                    <span class="text-gray-600">·</span>
                    <span class="text-gray-500 text-sm">Автоматизация</span>
                </div>
                <a href="https://sellermind.uz" target="_blank" class="inline-flex items-center gap-2 text-blue-400 font-medium hover:text-blue-300 transition-colors">
                    sellermind.uz
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12l6-6M11 6H5M11 6v6"/></svg>
                </a>
            </div>

            {{-- Risment --}}
            <div class="mb-8 p-8 sm:p-10 rounded-3xl bg-gradient-to-br from-violet-500/10 to-transparent border border-violet-500/15">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-3xl">📦</span>
                    <h3 class="text-2xl sm:text-3xl font-bold text-white">Risment</h3>
                </div>
                <p class="text-gray-300 leading-relaxed mb-4">
                    Профессиональный фулфилмент-сервис для селлеров маркетплейсов. Склад площадью
                    5 000+ м² в Ташкенте (Юнусабад). Полный цикл логистики под ключ: приёмка,
                    хранение, комплектация, упаковка и отправка товаров на Uzum, Wildberries,
                    Ozon и Yandex Market.
                </p>
                <div class="flex flex-wrap gap-4 mb-6">
                    <span class="text-gray-500 text-sm">5 000+ м² склад</span>
                    <span class="text-gray-600">·</span>
                    <span class="text-gray-500 text-sm">Хранение</span>
                    <span class="text-gray-600">·</span>
                    <span class="text-gray-500 text-sm">Упаковка</span>
                    <span class="text-gray-600">·</span>
                    <span class="text-gray-500 text-sm">Доставка на склады МП</span>
                </div>
                <a href="https://risment.uz" target="_blank" class="inline-flex items-center gap-2 text-violet-400 font-medium hover:text-violet-300 transition-colors">
                    risment.uz
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12l6-6M11 6H5M11 6v6"/></svg>
                </a>
            </div>

            {{-- ForrisPos --}}
            <div class="mb-8 p-8 sm:p-10 rounded-3xl bg-gradient-to-br from-rose-500/10 to-transparent border border-rose-500/15">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-3xl">🍽️</span>
                    <h3 class="text-2xl sm:text-3xl font-bold text-white">ForrisPos</h3>
                </div>
                <p class="text-gray-300 leading-relaxed mb-4">
                    POS-система, разработанная специально для ресторанов и кафе. Приём и управление
                    заказами, электронное меню, контроль кухни в реальном времени, аналитика продаж
                    и учёт персонала. Интуитивный интерфейс, который работает на планшетах и
                    POS-терминалах.
                </p>
                <div class="flex flex-wrap gap-4 mb-6">
                    <span class="text-gray-500 text-sm">Приём заказов</span>
                    <span class="text-gray-600">·</span>
                    <span class="text-gray-500 text-sm">Электронное меню</span>
                    <span class="text-gray-600">·</span>
                    <span class="text-gray-500 text-sm">Контроль кухни</span>
                    <span class="text-gray-600">·</span>
                    <span class="text-gray-500 text-sm">Аналитика</span>
                </div>
                <a href="https://pos.forris.uz" target="_blank" class="inline-flex items-center gap-2 text-rose-400 font-medium hover:text-rose-300 transition-colors">
                    pos.forris.uz
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12l6-6M11 6H5M11 6v6"/></svg>
                </a>
            </div>

            {{-- SILON --}}
            <div class="mb-8 p-8 sm:p-10 rounded-3xl bg-gradient-to-br from-purple-500/10 to-transparent border border-purple-500/15">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-3xl">📺</span>
                    <h3 class="text-2xl sm:text-3xl font-bold text-white">SILON</h3>
                    <span class="px-2 py-0.5 rounded-md bg-purple-500/10 border border-purple-500/20 text-purple-400 text-xs font-medium">В разработке</span>
                </div>
                <p class="text-gray-300 leading-relaxed mb-4">
                    Система управления медиаконтентом для экранов (Digital Signage). Позволяет
                    централизованно управлять и транслировать рекламный и информационный контент
                    на мониторах в любой точке мира. Идеально для ресторанов, магазинов, офисов
                    и общественных пространств.
                </p>
                <div class="flex flex-wrap gap-4">
                    <span class="text-gray-500 text-sm">Digital Signage</span>
                    <span class="text-gray-600">·</span>
                    <span class="text-gray-500 text-sm">Удалённое управление</span>
                    <span class="text-gray-600">·</span>
                    <span class="text-gray-500 text-sm">Расписание контента</span>
                    <span class="text-gray-600">·</span>
                    <span class="text-gray-500 text-sm">Мониторинг экранов</span>
                </div>
            </div>

            {{-- FORRIS Travel --}}
            <div class="p-8 sm:p-10 rounded-3xl bg-gradient-to-br from-emerald-500/10 to-transparent border border-emerald-500/15">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-3xl">✈️</span>
                    <h3 class="text-2xl sm:text-3xl font-bold text-white">FORRIS Travel</h3>
                </div>
                <p class="text-gray-300 leading-relaxed mb-4">
                    Туристический сервис для организации путешествий. Бронирование туров,
                    авиабилетов, отелей и трансферов. Индивидуальные и групповые туры
                    с профессиональной поддержкой на всех этапах поездки.
                </p>
                <div class="flex flex-wrap gap-4 mb-6">
                    <span class="text-gray-500 text-sm">Туры</span>
                    <span class="text-gray-600">·</span>
                    <span class="text-gray-500 text-sm">Авиабилеты</span>
                    <span class="text-gray-600">·</span>
                    <span class="text-gray-500 text-sm">Отели</span>
                    <span class="text-gray-600">·</span>
                    <span class="text-gray-500 text-sm">Трансферы</span>
                </div>
                <a href="https://travel.forris.uz" target="_blank" class="inline-flex items-center gap-2 text-emerald-400 font-medium hover:text-emerald-300 transition-colors">
                    travel.forris.uz
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12l6-6M11 6H5M11 6v6"/></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <section id="about" class="py-24 sm:py-32 relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="relative rounded-3xl overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-dark-700 via-dark-800 to-dark-900"></div>
                <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,rgba(212,168,83,0.1),transparent_50%)]"></div>
                <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_left,rgba(139,92,246,0.08),transparent_50%)]"></div>
                <div class="absolute inset-0 opacity-[0.04]" style="background-image: radial-gradient(circle, rgba(255,255,255,0.3) 1px, transparent 1px); background-size: 24px 24px;"></div>

                <div class="relative p-10 sm:p-16 lg:p-20">
                    <div class="max-w-3xl">
                        <span class="text-brand-gold text-sm font-semibold uppercase tracking-widest">О компании</span>
                        <h2 class="text-3xl sm:text-5xl font-bold text-white mt-3 tracking-tight leading-tight">
                            FOR + RIS
                        </h2>
                        <p class="text-gray-400 mt-6 text-lg leading-relaxed max-w-2xl">
                            Название FORRIS — это <strong class="text-gray-300">FOR</strong> (англ. «для», «ради») и
                            <strong class="text-gray-300">RIS</strong> — инициалы основателей компании.
                            Мы создаём технологии <em>для людей</em> — надёжные, стабильные и по-настоящему полезные.
                        </p>
                        <p class="text-gray-400 mt-4 text-lg leading-relaxed max-w-2xl">
                            Начав с интернет-магазина, мы выросли в экосистему из 7 продуктов:
                            от аналитики для селлеров и фулфилмента до POS-систем для ресторанов,
                            туристического сервиса и управления медиаконтентом на экранах.
                            Все продукты разработаны внутри компании в Узбекистане.
                        </p>

                        <div class="grid grid-cols-2 gap-6 mt-10">
                            <div>
                                <div class="text-2xl font-bold text-white">Надёжность</div>
                                <p class="text-gray-500 text-sm mt-1">Стабильные решения для бизнеса</p>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-white">Инновации</div>
                                <p class="text-gray-500 text-sm mt-1">AI и современные технологии</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Section --}}
    <section id="contact" class="py-24 sm:py-32 relative">
        <div class="max-w-3xl mx-auto px-6 text-center">
            <span class="text-brand-gold text-sm font-semibold uppercase tracking-widest">Контакты</span>
            <h2 class="text-3xl sm:text-5xl font-bold text-white mt-3 tracking-tight">Свяжитесь с нами</h2>
            <p class="text-gray-400 mt-4 max-w-xl mx-auto">
                Есть вопросы о продуктах экосистемы FORRIS? Мы на связи.
            </p>

            <div class="grid sm:grid-cols-3 gap-6 mt-12">
                <a href="mailto:info@forris.uz" class="p-6 rounded-2xl bg-dark-700 border border-white/5 hover:border-white/10 transition-colors text-center">
                    <div class="text-2xl mb-3">✉️</div>
                    <div class="text-white font-semibold mb-1">Email</div>
                    <div class="text-gray-400 text-sm">info@forris.uz</div>
                </a>
                <a href="https://www.instagram.com/forris.uz" target="_blank" class="p-6 rounded-2xl bg-dark-700 border border-white/5 hover:border-white/10 transition-colors text-center">
                    <div class="text-2xl mb-3">📷</div>
                    <div class="text-white font-semibold mb-1">Instagram</div>
                    <div class="text-gray-400 text-sm">@forris.uz</div>
                </a>
                <a href="https://forris.uz" class="p-6 rounded-2xl bg-dark-700 border border-white/5 hover:border-white/10 transition-colors text-center">
                    <div class="text-2xl mb-3">🌐</div>
                    <div class="text-white font-semibold mb-1">Сайт</div>
                    <div class="text-gray-400 text-sm">forris.uz</div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="border-t border-white/5 py-12">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-10">
                <div>
                    <img src="/images/logo.svg" alt="FORRIS" class="h-7 mb-4">
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Экосистема e-commerce, IT-продуктов и бизнес-решений. Сделано в Узбекистане.
                    </p>
                </div>

                <div>
                    <h4 class="text-sm font-semibold text-white mb-4">Продукты</h4>
                    <div class="space-y-2.5">
                        <a href="https://store.forris.uz" target="_blank" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">FORRIS Store</a>
                        <a href="https://sellermind.uz" target="_blank" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">SellerMind</a>
                        <a href="https://risment.uz" target="_blank" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">Risment</a>
                        <a href="https://pos.forris.uz" target="_blank" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">ForrisPos</a>
                        <a href="https://travel.forris.uz" target="_blank" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">FORRIS Travel</a>
                    </div>
                </div>

                <div>
                    <h4 class="text-sm font-semibold text-white mb-4">Маркетплейсы</h4>
                    <div class="space-y-2.5">
                        <a href="https://uzum.uz/ru/shop/qulay-uy" target="_blank" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">Uzum Market</a>
                        <a href="https://www.wildberries.ru/seller/4043207" target="_blank" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">Wildberries</a>
                        <a href="https://www.ozon.ru/seller/forris-home-uz-1988192/" target="_blank" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">Ozon</a>
                        <a href="https://market.yandex.uz/business--forris-home/198398241" target="_blank" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">Yandex Market</a>
                    </div>
                </div>

                <div>
                    <h4 class="text-sm font-semibold text-white mb-4">Компания</h4>
                    <div class="space-y-2.5">
                        <a href="#about" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">О нас</a>
                        <a href="#ecosystem" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">Экосистема</a>
                        <a href="https://www.instagram.com/forris.uz" target="_blank" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">Instagram</a>
                        <a href="mailto:info@forris.uz" class="block text-sm text-gray-500 hover:text-gray-300 transition-colors">info@forris.uz</a>
                    </div>
                </div>
            </div>

            <div class="mt-12 pt-8 border-t border-white/5 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-sm text-gray-600">&copy; {{ date('Y') }} FORRIS. Все права защищены.</p>
            </div>
        </div>
    </footer>

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
