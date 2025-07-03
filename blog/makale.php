<?php
require_once __DIR__ . '/bootstrap.php';
krsort($makaleler);

$slug = isset($_GET['slug']) ? $_GET['slug'] : null;
$makale = null;
$id = null;

if ($slug) {
    // Gelen slug'a uyan makaleyi bul
    foreach ($makaleler as $makale_id => $makale_verisi) {
        if (isset($makale_verisi['slug']) && $makale_verisi['slug'] === $slug) {
            $makale = $makale_verisi;
            $id = $makale_id;
            break;
        }
    }
}

$makale_mevcut = ($makale !== null);

if ($makale_mevcut) {

    $gosterim_dosyasi = BLOG_ROOT . '/gosterimler.json';
    $gosterimler = file_exists($gosterim_dosyasi) ? json_decode(file_get_contents($gosterim_dosyasi), true) : [];
    if (!isset($_SESSION['viewed_articles'][$id])) {
        $gosterimler[$id] = ($gosterimler[$id] ?? 0) + 1;
        file_put_contents($gosterim_dosyasi, json_encode($gosterimler, JSON_PRETTY_PRINT));
        $_SESSION['viewed_articles'][$id] = true;
    }


    $makale_idler = array_keys($makaleler);
    $suanki_index = array_search($id, $makale_idler);


    $onceki_id = isset($makale_idler[$suanki_index - 1]) ? $makale_idler[$suanki_index - 1] : null;

    $sonraki_id = isset($makale_idler[$suanki_index + 1]) ? $makale_idler[$suanki_index + 1] : null;

    $sayfa_basligi_seo = !empty($makale['seo_title']) ? $makale['seo_title'] : $makale['baslik'];
    $sayfa_aciklamasi_seo = !empty($makale['seo_description']) ? $makale['seo_description'] : $makale['ozet'];
} else {

    http_response_code(404);
    $sayfa_basligi_seo = "404 - Sayfa Bulunamadı";
    $sayfa_aciklamasi_seo = "Aradığınız makale bulunamadı veya adresi değiştirilmiş olabilir.";
}

require_once BLOG_ROOT . '/header.php';
?>

<?php if ($makale_mevcut): ?>
    <section class="page-title-section">
        <div class="container">
            <span class="category-badge"><?php echo htmlspecialchars($makale['kategori']); ?></span>
            <h1><?php echo htmlspecialchars($makale['baslik']); ?></h1>
            <div class="article-meta">
                <span>Yazar: <?php echo htmlspecialchars($makale['yazar']); ?></span> |
                <span>Yayın Tarihi: <?php echo format_turkish_date('d F Y', $makale['tarih']); ?></span>
                | <span>Gösterim: <?php echo $gosterimler[$id] ?? 0; ?></span>
            </div>
        </div>
    </section>
    <main class="main-content">
        <div class="container">
            <div class="makale-detay-icerik">
                <img src="<?php echo htmlspecialchars(BLOG_URL . '/' . $makale['resim']); ?>"
                    alt="<?php echo htmlspecialchars($makale['baslik']); ?>" class="featured-image">
                <div class="article-content">
                    <?php echo $makale['icerik']; ?>

                    <div class="tags-section">
                        <h3>Etiketler</h3>
                        <div class="tags">
                            <?php foreach ($makale['etiketler'] as $etiket):
                                $etiket_slug = create_slug($etiket);
                                ?>
                                <a
                                    href="<?php echo BLOG_URL; ?>/etiket/<?php echo htmlspecialchars($etiket_slug); ?>">#<?php echo htmlspecialchars($etiket); ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <?php if ($onceki_id !== null || $sonraki_id !== null): ?>
                        <nav class="post-navigation">
                            <div class="nav-links">
                                <?php if ($onceki_id !== null):
                                    $onceki_makale = $makaleler[$onceki_id]; ?>
                                    <div class="nav-previous">
                                        <a href="<?php echo BLOG_URL . '/' . htmlspecialchars($onceki_makale['slug']); ?>"
                                            rel="prev">
                                            <span class="meta-nav">← Önceki Makale</span>
                                            <span
                                                class="post-title"><?php echo htmlspecialchars($onceki_makale['baslik']); ?></span>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <?php if ($sonraki_id !== null):
                                    $sonraki_makale = $makaleler[$sonraki_id]; ?>
                                    <div class="nav-next">
                                        <a href="<?php echo BLOG_URL . '/' . htmlspecialchars($sonraki_makale['slug']); ?>"
                                            rel="next">
                                            <span class="meta-nav">Sonraki Makale →</span>
                                            <span
                                                class="post-title"><?php echo htmlspecialchars($sonraki_makale['baslik']); ?></span>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </nav>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>

<?php else:
    ?>
    <div class="container" style="text-align:center; padding: 80px 20px;">
        <h1>404 - Sayfa Bulunamadı</h1>
        <p>Aradığınız sayfa mevcut değil veya taşınmış olabilir.</p>
        <a href="<?php echo BLOG_URL; ?>/"
            style="display:inline-block; margin-top:20px; padding:10px 20px; background-color:#ED1C24; color:white; border-radius:5px;">Blog
            Ana Sayfasına Dön</a>
    </div>
<?php endif; ?>

<?php
require_once BLOG_ROOT . '/footer.php';
?>