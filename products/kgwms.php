<?php
require_once __DIR__ . '/../config.php';
$pageTitle = 'KG WMS | Depo ve Lojistik Yönetimi Çözümü';
$pageDescription = 'KG WMS ile depo süreçlerinizi otomatikleştirin, el terminalleri ile verimliliği artırın ve sevkiyatlarınızı optimize edin.';
$currentNavItems = $productNavItems;
$breadcrumbTitle = 'KG WMS';
$pageId = 'kgwms';
require_once __DIR__ . '/../templates/header.php';
?>
<main class="pt-24 md:pt-20 bg-white">
    <section id="genel-bakis" class="relative bg-gray-100 pt-12">
        <div class="absolute inset-0">
            <img src="../assets/korgunerp-img/1bgt4548asds6745fgdetr45.webp"
                alt="Modern bir depo ve lojistik operasyonu" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-white/60"></div>
        </div>
        <div
            class="relative container mx-auto px-4 grid grid-cols-12 items-center min-h-[calc(100vh-140px)] md:min-h-[calc(100vh-180px)]">
            <div
                class="col-span-12 md:col-span-7 lg:col-span-6 
            bg-white/80 backdrop-opacity-md p-6 md:p-8 rounded-xl shadow-lg shadow-md hover:shadow-xl transition-all duration-300">
                <div class="z-10">
                    <span class="inline-block bg-primary/10 text-primary text-sm font-bold px-3 py-1 rounded-full mb-4">
                        DEPO VE LOJİSTİK YÖNETİMİ (WMS)
                    </span>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        Deponuzun Kontrolü <span class="text-primary">Parmaklarınızın Ucunda</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed max-w-xl">
                        Mal kabulden sevkiyata, tüm depo operasyonlarınızı dijitalleştirin. El terminalleri ile sahadan
                        anlık veri toplayın, stok doğruluğunu %100'e yaklaştırın ve sevkiyat rotalarınızı optimize
                        ederek maliyetlerinizi düşürün.
                    </p>
                </div>
                <div></div>
            </div>
        </div>
    </section>
    <?php
    require_once __DIR__ . '/../templates/sections/pagesticky-nav.php';
    ?>
    <section id="faydalar" class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">KG WMS ile Kazanımlarınız</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Lojistik operasyonlarınızı bir üst seviyeye taşıyacak
                    temel avantajlar.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-archive-stack-line text-4xl"></i></div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Maksimum Stok Doğruluğu</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Adres, lot ve seri no bazında yapılan anlık takip
                        ile envanter kayıplarını ve hatalı sayımları ortadan kaldırın.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-speed-up-line text-4xl"></i></div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Operasyonel Hız Artışı</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">El terminalleri ve barkod otomasyonu ile mal kabul,
                        yerleştirme ve toplama süreçlerinizi %70'e varan oranda hızlandırın.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-truck-line text-4xl"></i></div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Optimize Edilmiş Sevkiyat</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Rota planlama ve araç yükleme optimizasyonu ile
                        yakıt ve zaman maliyetlerinizi düşürerek teslimat performansınızı artırın.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-fullscreen-exit-line text-4xl"></i></div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Verimli Depo Alanı</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Akıllı adresleme ve yerleştirme algoritmaları
                        sayesinde depo alanınızı en verimli şekilde kullanarak kapasitenizi artırın.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="sektorler" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Deponuzun Akıllı Yönetim Merkezi</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">KG WMS, depo ve lojistik süreçlerinizin her anını
                    kontrol etmenizi sağlayan güçlü modüller sunar.</p>
            </div>
            <div class="max-w-5xl mx-auto grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8 text-center">
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-login-box-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Mal Kabul Yönetimi</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-building-4-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Adresleme ve Yerleştirme</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-shopping-basket-2-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Sipariş Toplama</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-check-double-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Kontrol ve Paketleme</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-logout-box-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Yükleme ve Sevkiyat</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-barcode-box-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">El Terminali Yönetimi</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-route-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Rota Optimizasyonu</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-sound-module-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">ERP Entegrasyonu</p>
                </div>
            </div>
        </div>
    </section>
    <section id="whykorgun" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Neden KG WMS?</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Sadece bir depo yazılımı değil, lojistik
                    operasyonlarınız için tasarlanmış bir verimlilik ortağı.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="text-center">
                    <div class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full">
                        <i class="ri-android-line text-4xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Donanım Bağımsız Çalışma</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Android tabanlı tüm el terminalleri ve mobil
                        cihazlarla uyumlu yapısı sayesinde mevcut donanımlarınızı kullanabilir, yatırım maliyetinden
                        tasarruf edebilirsiniz.</p>
                </div>
                <div class="text-center">
                    <div class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full">
                        <i class="ri-user-settings-line text-4xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Kolay ve Sezgisel Arayüz</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Depo personelinizin hızla adapte olacağı, basit ve
                        anlaşılır el terminali ekranları ile eğitim süreçlerini kısaltın ve hataları en aza indirin.</p>
                </div>
                <div class="text-center">
                    <div class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full">
                        <i class="ri-links-line text-4xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Kusursuz ERP Entegrasyonu</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Kullandığınız ERP yazılımı ile tam entegre çalışır.
                        Stok, sipariş ve cari bilgileri anlık olarak senkronize olur, veri tutarlılığı sağlanır.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="entegrasyon" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="inline-block bg-primary/10 text-primary text-sm font-bold px-3 py-1 rounded-full mb-4">
                        TEKNOLOJİK ÜSTÜNLÜK
                    </span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Tedarik Zincirinizin Omurgası</h2>
                    <p class="text-lg text-gray-600 mb-6">KG WMS, ERP sisteminizden kargo firmalarına, e-ticaret
                        platformlarından muhasebe yazılımlarına kadar tüm ekosisteminizle konuşarak bütünleşik bir
                        lojistik ağı kurmanızı sağlar.</p>
                    <a href="<?= DEMO_URL ?>" target="_blank"
                        class="text-lg text-primary font-semibold hover:underline">Demo talep edin <i
                            class="ri-arrow-right-line align-middle"></i></a>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-database-2-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">Tüm ERP Yazılımları</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-barcode-box-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">El Terminalleri</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-truck-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">Kargo Entegrasyonları</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-shopping-cart-2-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">E-Ticaret & Pazaryerleri</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-printer-cloud-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">Barkod Yazıcılar</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-file-list-3-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">E-İrsaliye</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
require_once __DIR__ . '/../templates/footer.php';
?>