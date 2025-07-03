<?php

require_once __DIR__ . '/bootstrap.php';

$secilen_kategori_slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$secilen_kategori_adi = 'Bulunamadı';

if (empty($secilen_kategori_slug)) {
    header('Location: ' . BLOG_URL . '/');
    exit();
}

foreach ($makaleler as $makale) {
    if (create_slug($makale['kategori']) === $secilen_kategori_slug) {
        $secilen_kategori_adi = $makale['kategori'];
        break;
    }
}

$sayfa_basligi_seo = htmlspecialchars($secilen_kategori_adi) . " Kategorisindeki Yazılar";
$sayfa_aciklamasi_seo = htmlspecialchars($secilen_kategori_adi) . " kategorisindeki en güncel blog yazıları ve teknoloji haberleri.";

require_once BLOG_ROOT . '/header.php';

$kategori_makaleleri = [];
foreach ($makaleler as $id => $makale) {
    if (create_slug($makale['kategori']) === $secilen_kategori_slug) {
        $kategori_makaleleri[$id] = $makale;
    }
}
krsort($kategori_makaleleri);

$sayfa_basi_makale = 6;
$toplam_makale = count($kategori_makaleleri);
$toplam_sayfa = ceil($toplam_makale / $sayfa_basi_makale);

$suanki_sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
if ($suanki_sayfa < 1)
    $suanki_sayfa = 1;
if ($suanki_sayfa > $toplam_sayfa && $toplam_sayfa > 0)
    $suanki_sayfa = $toplam_sayfa;

$offset = ($suanki_sayfa - 1) * $sayfa_basi_makale;
$gosterilecek_makaleler = array_slice($kategori_makaleleri, $offset, $sayfa_basi_makale, true);
?>

<div class="page-title-section">
    <div class="container">
        <h1>Kategori: <span><?php echo htmlspecialchars($secilen_kategori_adi); ?></span></h1>
        <p><?php echo $toplam_makale; ?> adet yazı bulundu.</p>
    </div>
</div>

<main class="main-content">
    <div class="container">
        <section class="blog-listesi">
            <?php if (!empty($gosterilecek_makaleler)): ?>
                <?php foreach ($gosterilecek_makaleler as $id => $makale): ?>
                    <?php render_makale_karti($id, $makale); ?>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="bilgi-mesaji" style="grid-column: 1 / -1; text-align: center;">
                    <p>Bu kategoride henüz yazı bulunmuyor.</p>
                </div>
            <?php endif; ?>
        </section>

        <nav class="sayfalama">
            <?php if ($toplam_sayfa > 1): ?>
                <?php
                $base_url = BLOG_URL . '/kategori/' . $secilen_kategori_slug;
                ?>
                <?php if ($suanki_sayfa > 1): ?>
                    <a
                        href="<?php echo htmlspecialchars(($suanki_sayfa - 1) == 1 ? $base_url . '/' : $base_url . '/sayfa/' . ($suanki_sayfa - 1)); ?>">«
                        Önceki</a>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $toplam_sayfa; $i++): ?>
                    <?php if ($i == $suanki_sayfa): ?>
                        <span class="aktif"><?php echo $i; ?></span>
                    <?php else:
                        $sayfa_linki = ($i == 1) ? $base_url . '/' : $base_url . '/sayfa/' . $i;
                        ?>
                        <a href="<?php echo htmlspecialchars($sayfa_linki); ?>"><?php echo $i; ?></a>
                    <?php endif; ?>
                <?php endfor; ?>

                <?php if ($suanki_sayfa < $toplam_sayfa): ?>
                    <a href="<?php echo htmlspecialchars($base_url . '/sayfa/' . ($suanki_sayfa + 1)); ?>">Sonraki »</a>
                <?php endif; ?>
            <?php endif; ?>
        </nav>
    </div>
</main>

<?php
require_once __DIR__ . '/../templates/footer.php';
?>