<?php
// --- Değişkenleriniz burada kalabilir, bir sorun yok ---
global $makaleler;
$site_adi = 'Korgün Blog';
$varsayilan_aciklama = 'Korgün Yazılım blogunda üretim, stok yönetimi, dijital dönüşüm ve teknoloji üzerine en güncel yazıları okuyun.';
$final_title = isset($sayfa_basligi_seo) ? htmlspecialchars($sayfa_basligi_seo) . ' | ' . $site_adi : $site_adi . ' | Sektörel Yazılar ve Teknoloji Haberleri';
$final_description = isset($sayfa_aciklamasi_seo) ? htmlspecialchars($sayfa_aciklamasi_seo) : $varsayilan_aciklama;
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $final_title; ?></title>
    <meta name="description" content="<?php echo $final_description; ?>">

    <!-- === TEMİZLENMİŞ VE DOĞRU SIRALANMIŞ STİLLER === -->

    <!-- 1. Tailwind CSS (CDN ile Just-in-Time derleme için) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- 2. Tailwind'i kendi renklerinizle özelleştirmek için config ayarı -->
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

    <!-- 3. Sitenizin birleştirilmiş ve merkezi CSS dosyası -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css">

    <!-- === DİĞER KAYNAKLAR === -->
    <link rel="icon" href="<?php echo BASE_URL; ?>/assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Poppins:wght@600;700&display=swap"
        rel="stylesheet">
</head>

<body class="bg-white">
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <a href="<?php echo BASE_URL; ?>/">
                    <img src="<?php echo BASE_URL; ?>/assets/korgun_logo_rev3.svg" width="180" height="auto"
                        alt="Korgün ERP Logo" />
                </a>
            </div>

            <nav class="main-nav">
                <ul>
                    <li><a href="<?php echo BASE_URL; ?>/">Korgün Anasayfa</a></li>
                    <?php if (isset($makaleler) && !empty($makaleler)): ?>
                        <li class="dropdown">
                            <span class="nav-trigger">
                                Kategoriler <span class="dropdown-arrow">▼</span>
                            </span>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo BLOG_URL; ?>/">Tüm Yazılar</a></li>
                                <li class="dropdown-divider"></li>
                                <?php
                                $tum_kategoriler = array_unique(array_column($makaleler, 'kategori'));
                                sort($tum_kategoriler);
                                foreach ($tum_kategoriler as $kategori):
                                    $kategori_slug = create_slug($kategori);
                                    ?>
                                    <li>
                                        <a
                                            href="<?php echo BLOG_URL; ?>/kategori/<?php echo htmlspecialchars($kategori_slug); ?>">
                                            <?php echo htmlspecialchars($kategori); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>