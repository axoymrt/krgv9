<?php

//require_once __DIR__ . '/../LOG/log_visitor.php';

$pageTitle = isset($pageTitle) ? $pageTitle : 'Korgün ERP';
$pageDescription = isset($pageDescription) ? $pageDescription : 'Üretim süreçlerinizi dijitalleştirin.';
$navToUse = isset($currentNavItems) ? $currentNavItems : [];

require_once __DIR__ . '/../config.php';


$home_url = BASE_URL . '';
$logo_url = BASE_URL . '/assets/korgun_logo_rev3.svg';
$favicon_url = BASE_URL . '/assets/favicon.png';
$apple_touch_icon_url = BASE_URL . '/assets/apple-touch-icon.png';
$style_css_url = BASE_URL . '/assets/css/style.css';
$demo_url = BASE_URL . '/demo_talep/demo_talep.html';


if (!function_exists('create_nav_url')) {
    function create_nav_url($url)
    {
        if (strpos($url, '#') === 0) {
            return $url;
        }
        return BASE_URL . $url;
    }
}
?>
<!doctype html>
<html lang="tr" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> | <?= SITE_NAME ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">

    <!-- Temel Font ve İkon Kütüphaneleri (Bunlar kalmalı) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="icon" href="<?= htmlspecialchars($favicon_url) ?>" />
    <link rel="apple-touch-icon" href="<?= htmlspecialchars($apple_touch_icon_url) ?>" />

    <!-- <link rel="stylesheet" href="<?= htmlspecialchars($tailwind_css_url) ?>"> tailwind -->

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#ED1C24',
                        secondary: '#2A3F54'
                    },
                    borderRadius: {
                        'button': '8px'

                    }
                }
            }
        }
    </script>

    <link rel="stylesheet" href="<?= htmlspecialchars($style_css_url) ?>">

    <!-- Google Tag Manager (Bu kalmalı) -->
    <script> (function (w, d, s, l, i) { w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' }); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', 'dataLayer', 'GTM-PX5PVR7'); </script>

    <style type="text/tailwindcss">
        .nav-link { 
            @apply relative text-lg text-gray-700 hover:text-primary font-medium transition-colors after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-primary after:transition-all after:duration-300 hover:after:w-full cursor-pointer; 
        }
        .nav-separator { 
            @apply text-lg text-gray-300; 
        }

        input[type="search"] { 
            -webkit-appearance: none !important; 
            appearance: none !important; 
        }
        input[type="search"]::-webkit-search-decoration,
        input[type="search"]::-webkit-search-cancel-button,
        input[type="search"]::-webkit-search-results-button,
        input[type="search"]::-webkit-search-results-decoration { 
            display: none !important; 
        }
    </style>
</head>

<body id="top" class="bg-white">

    <body id="top" class="bg-white" x-data="{ searchModalOpen: false, mobileMenuOpen: false }">
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PX5PVR7" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>

        <header class="fixed top-0 left-0 right-0 bg-white shadow-md z-50">
            <div class="container mx-auto px-4 py-3 flex justify-between items-center">
                <a href="<?= htmlspecialchars($home_url) ?>"><img src="<?= htmlspecialchars($logo_url) ?>" width="180"
                        height="auto" class="logo" alt="<?= htmlspecialchars(SITE_NAME) ?> Logo" loading="eager"
                        fetchpriority="high" /></a>
                <nav class="hidden xl:flex items-center space-x-5">
                    <?php $itemCount = count($navToUse);
                    $i = 0;
                    foreach ($navToUse as $name => $url):
                        $i++;
                        $final_url = create_nav_url($url); ?>
                        <a href="<?= htmlspecialchars($final_url) ?>"
                            class="nav-link whitespace-nowrap"><?= htmlspecialchars($name) ?></a>
                        <?php if ($i < $itemCount): ?><span class="nav-separator">|</span><?php endif; ?>
                    <?php endforeach; ?>
                    <a href="<?= htmlspecialchars($demo_url) ?>" target="_blank"
                        class="text-lg bg-primary text-white px-6 py-2 !rounded-button whitespace-nowrap font-medium hover:bg-red-600 transition-colors">Demo
                        Talep Et</a>
                </nav>
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                    class="xl:hidden flex items-center justify-center w-10 h-10" aria-label="Mobil menüyü aç/kapat"><i
                        class="ri-menu-line text-2xl text-gray-700"></i></button>
            </div>
            <div x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false" x-transition
                class="xl:hidden bg-white shadow-lg absolute w-full max-h-[85vh] overflow-y-auto">
                <div class="container mx-auto px-4 py-4 flex flex-col">
                    <?php foreach ($navToUse as $name => $url):
                        $final_url = create_nav_url($url); ?>
                        <div class="border-b border-gray-100"><a href="<?= htmlspecialchars($final_url) ?>"
                                class="block w-full text-base text-gray-700 font-medium py-3 px-4 rounded-md hover:bg-gray-50 hover:text-primary transition-all duration-200"><?= htmlspecialchars($name) ?></a>
                        </div>
                    <?php endforeach; ?>
                    <a href="<?= htmlspecialchars($demo_url) ?>" target="_blank"
                        class="w-full mt-4 text-center text-base bg-primary text-white px-6 py-3 rounded-button font-bold hover:bg-red-600 transition-colors duration-300">Demo
                        Talep Et</a>
                </div>
            </div>
        </header>

        <div x-show="searchModalOpen" x-trap.inert.noscroll="searchModalOpen"
            @keydown.escape.window="searchModalOpen = false" style="display: none;"
            class="fixed inset-0 bg-black/70 backdrop-blur-sm z-[9999] flex items-center justify-center p-4"
            x-transition>

            <div class="w-full max-w-2xl">
                <form action="<?= BASE_URL ?>/arama.php" method="GET"
                    class="relative bg-white rounded-lg shadow-2xl flex items-center">

                    <input x-ref="modalSearchInput" type="search" name="q" placeholder="Ne aramıştınız?"
                        class="w-full bg-transparent border-0 text-2xl font-medium text-gray-800 p-4 rounded-lg focus:outline-none focus:ring-0 placeholder:text-gray-400">

                    <button type="button" @click="searchModalOpen = false"
                        class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-700 transition-colors"
                        aria-label="Aramayı kapat">
                        <i class="ri-close-line text-3xl"></i>
                    </button>
                </form>
                <p class="text-white/80 text-center text-sm mt-4">Kapatmak için ESC tuşuna basabilirsiniz.</p>
            </div>
        </div>