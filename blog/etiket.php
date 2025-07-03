<?php
require_once __DIR__ . '/bootstrap.php';
if (!isset($_GET['slug']) || empty($_GET['slug'])) {
    header('Location: ' . BLOG_URL . '/');
    exit();
}
$secilen_etiket_slug = trim($_GET['slug']);
$secilen_etiket_adi = 'Bulunamadı';

$filtrelenmis_makaleler = [];
foreach ($makaleler as $id => $makale) {
    if (isset($makale['etiketler']) && is_array($makale['etiketler'])) {
        foreach ($makale['etiketler'] as $etiket) {

            if (create_slug($etiket) === $secilen_etiket_slug) {
                $filtrelenmis_makaleler[$id] = $makale;

                if ($secilen_etiket_adi === 'Bulunamadı') {
                    $secilen_etiket_adi = $etiket;
                }
                break;
            }
        }
    }
}
krsort($filtrelenmis_makaleler);

$sayfa_basligi_seo = 'Etiket: ' . htmlspecialchars($secilen_etiket_adi);
$sayfa_aciklamasi_seo = htmlspecialchars($secilen_etiket_adi) . ' etiketiyle ilgili tüm blog yazıları.';

$sayfa_basi_makale = 6;
$toplam_makale = count($filtrelenmis_makaleler);
$toplam_sayfa = ceil($toplam_makale / $sayfa_basi_makale);

$suanki_sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
if ($suanki_sayfa < 1)
    $suanki_sayfa = 1;
if ($suanki_sayfa > $toplam_sayfa && $toplam_sayfa > 0)
    $suanki_sayfa = $toplam_sayfa;

$offset = ($suanki_sayfa - 1) * $sayfa_basi_makale;
$gosterilecek_makaleler = array_slice($filtrelenmis_makaleler, $offset, $sayfa_basi_makale, true);

require_once BLOG_ROOT . '/header.php';
?>

<div class="page-title-section">
    <div class="container">
        <h1>Etiket: "<?php echo htmlspecialchars($secilen_etiket_adi); ?>"</h1>
        <p><?php echo $toplam_makale; ?> adet yazı bulundu.</p>
    </div>
</div>
<main class="main-content">
    <div class="container">
        <div class="blog-listesi">
            <?php if (empty($gosterilecek_makaleler)): ?>
                <p style="grid-column: 1 / -1; text-align: center;">Bu etiketle ilgili hiçbir makale bulunamadı.</p>
            <?php else: ?>
                <?php foreach ($gosterilecek_makaleler as $id => $makale): ?>
                    <?php render_makale_karti($id, $makale);
                    ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <nav class="sayfalama">
            <?php if ($toplam_sayfa > 1): ?>
                <?php

                $base_url = BLOG_URL . '/etiket/' . $secilen_etiket_slug;
                ?>
                <?php if ($suanki_sayfa > 1): ?>
                    <a href="<?php echo htmlspecialchars($base_url . '/sayfa/' . ($suanki_sayfa - 1)); ?>">« Önceki</a>
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