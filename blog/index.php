<?php

require_once __DIR__ . '/bootstrap.php';

$sayfa_basligi_seo = "Sektörel Yazılar ve Teknoloji Haberleri";
$sayfa_aciklamasi_seo = "Korgün ERP Blog - Üretim, stok yönetimi, dijital dönüşüm ve teknoloji üzerine en güncel yazılar ve haberler.";

require_once BLOG_ROOT . '/header.php';

$sayfa_basi_makale = 5;
krsort($makaleler);
$toplam_makale = count($makaleler);
$toplam_sayfa = ceil($toplam_makale / $sayfa_basi_makale);

$suanki_sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
if ($suanki_sayfa < 1)
    $suanki_sayfa = 1;
if ($suanki_sayfa > $toplam_sayfa && $toplam_sayfa > 0)
    $suanki_sayfa = $toplam_sayfa;

$offset = ($suanki_sayfa - 1) * $sayfa_basi_makale;
$gosterilecek_makaleler = array_slice($makaleler, $offset, $sayfa_basi_makale, true);

$manset_makale = !empty($gosterilecek_makaleler) ? current($gosterilecek_makaleler) : null;
$manset_makale_id = !empty($gosterilecek_makaleler) ? key($gosterilecek_makaleler) : null;
$diger_makaleler = array_slice($gosterilecek_makaleler, 1, null, true);
$yan_yana_makaleler = array_slice($diger_makaleler, 0, 2, true);
$kalan_makaleler = array_slice($diger_makaleler, 2, null, true);
?>

<div class="page-title-section">
    <div class="container">
        <h1>Dijitalleşme Yolculuğunda ERP'nin Gücü</h1>
        <p>ERP'nin sağladığı avantajlarla üretimden perakendeye birçok sektörde dijital dönüşüm mümkün.</p>
    </div>
</div>

<main class="main-content">
    <div class="container">
        <?php if ($manset_makale): ?>
            <section class="manset-alani">
                <?php render_makale_karti($manset_makale_id, $manset_makale, 'makale-karti--manset'); ?>
            </section>
        <?php endif; ?>

        <?php if (!empty($yan_yana_makaleler)): ?>
            <section class="yan-yana-alani">
                <?php foreach ($yan_yana_makaleler as $id => $makale) {
                    render_makale_karti($id, $makale);
                } ?>
            </section>
        <?php endif; ?>

        <?php if (!empty($kalan_makaleler)): ?>
            <section class="blog-listesi">
                <?php foreach ($kalan_makaleler as $id => $makale) {
                    render_makale_karti($id, $makale);
                } ?>
            </section>
        <?php endif; ?>

        <nav class="sayfalama">
            <?php if ($toplam_sayfa > 1): ?>
                <?php if ($suanki_sayfa > 1):
                    $onceki_link = ($suanki_sayfa - 1) == 1 ? BLOG_URL . '/' : BLOG_URL . '/sayfa/' . ($suanki_sayfa - 1); ?>
                    <a href="<?php echo htmlspecialchars($onceki_link); ?>">« Önceki</a>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $toplam_sayfa; $i++): ?>
                    <?php if ($i == $suanki_sayfa): ?>
                        <span class="aktif"><?php echo $i; ?></span>
                    <?php else:
                        $sayfa_linki = $i == 1 ? BLOG_URL . '/' : BLOG_URL . '/sayfa/' . $i; ?>
                        <a href="<?php echo htmlspecialchars($sayfa_linki); ?>"><?php echo $i; ?></a>
                    <?php endif; ?>
                <?php endfor; ?>
                <?php if ($suanki_sayfa < $toplam_sayfa): ?>
                    <a href="<?php echo BLOG_URL . '/sayfa/' . ($suanki_sayfa + 1); ?>">Sonraki »</a>
                <?php endif; ?>
            <?php endif; ?>
        </nav>
    </div>
</main>

<?php
require_once __DIR__ . '/../templates/footer.php';
?>