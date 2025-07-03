<?php

if (!isset($makaleler)) {
    $makaleler = [];
}
if (!defined('BLOG_URL')) {
    define('BLOG_URL', '/blog');
}

krsort($makaleler);
$son_makaleler = array_slice($makaleler, 0, 3, true);
?>

<section id="erp-blog" class="py-20 bg-slate-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Dijitalleşme Yolculuğunda ERP'nin Gücü</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                ERP'nin sağladığı avantajlarla üretimden perakendeye birçok sektörde dijital dönüşüm mümkün.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php if (!empty($son_makaleler)): ?>
                <?php foreach ($son_makaleler as $id => $makale): ?>
                    <?php

                    if (isset($makale['slug'])) {
                        $makale_linki = BLOG_URL . '/' . htmlspecialchars($makale['slug']);
                    } else {

                        $makale_linki = BLOG_URL . '/makale.php?id=' . $id;
                    }

                    $resim_yolu = BLOG_URL . '/' . ltrim($makale['resim'], '/');

                    $ozet = $makale['ozet'];
                    $karakter_siniri = 110;
                    if (mb_strlen($ozet, 'UTF-8') > $karakter_siniri) {
                        $kisaltilmis_parca = mb_substr($ozet, 0, $karakter_siniri, 'UTF-8');
                        $son_bosluk = mb_strrpos($kisaltilmis_parca, ' ', 0, 'UTF-8');
                        $ozet = ($son_bosluk !== false) ? mb_substr($kisaltilmis_parca, 0, $son_bosluk, 'UTF-8') . '...' : $kisaltilmis_parca . '...';
                    }
                    ?>

                    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col h-full transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">

                        <a href="<?php echo htmlspecialchars($makale_linki); ?>">
                            <img class="w-full h-48 object-cover" src="<?php echo htmlspecialchars($resim_yolu); ?>" alt="<?php echo htmlspecialchars($makale['baslik']); ?>">
                        </a>

                        <div class="p-6 flex flex-col flex-grow">
                            <span class="text-sm font-semibold text-red-600 uppercase mb-2"><?php echo htmlspecialchars($makale['kategori']); ?></span>

                            <h3 class="text-xl font-bold text-gray-900 mb-3 leading-tight">
                                <a href="<?php echo htmlspecialchars($makale_linki); ?>" class="hover:text-red-700 transition-colors">
                                    <?php echo htmlspecialchars($makale['baslik']); ?>
                                </a>
                            </h3>

                            <p class="text-gray-700 text-base flex-grow mb-4">
                                <?php echo htmlspecialchars($ozet); ?>
                            </p>

                            <div class="mt-auto">
                                <a href="<?php echo htmlspecialchars($makale_linki); ?>" class="text-red-600 font-bold hover:underline">
                                    Devamını Oku →
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center text-gray-500 col-span-3">Gösterilecek blog yazısı bulunamadı.</p>
            <?php endif; ?>
        </div>

        <div class="text-center mt-16">

        <a href="<?php echo htmlspecialchars(BLOG_URL); ?>/" class="inline-block bg-red-600 text-white font-bold text-lg px-8 py-3 rounded-lg hover:bg-red-700 transition-all duration-300 shadow-md hover:shadow-lg">
                Tüm Blog Yazılarını Gör
            </a>
        </div>
    </div>
</section>