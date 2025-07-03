<?php
require_once __DIR__ . '/../config.php';
$pageTitle = 'KG Shop | E-Ticaret & B2B Yönetim Platformu';
$pageDescription = 'KG Shop ile pazaryeri ve B2B/B2C süreçlerinizi tek merkezden yönetin. Stok, sipariş ve fatura entegrasyonu ile e-ticarette verimliliği yakalayın.';
$currentNavItems = $productNavItems;
$breadcrumbTitle = 'KG SHOP';
$pageId = 'kgshop';
require_once __DIR__ . '/../templates/header.php';
?>
<main class="pt-24 md:pt-20 bg-white">
    <section id="genel-bakis" class="relative bg-gray-100 pt-12">
        <div class="absolute inset-0">
            <img src="../assets/korgunerp-img/33shop457korg98a12.webp" alt="E-ticaret yönetimi ve alışveriş"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-white/60"></div>
        </div>
        <div
            class="relative container mx-auto px-4 grid grid-cols-12 items-center min-h-[calc(100vh-140px)] md:min-h-[calc(100vh-180px)]">
            <div
                class="col-span-12 md:col-span-7 lg:col-span-6 
            bg-white/80 backdrop-opacity-md p-6 md:p-8 rounded-xl shadow-lg shadow-md hover:shadow-xl transition-all duration-300">
                <div class="z-10">
                    <span class="inline-block bg-primary/10 text-primary text-sm font-bold px-3 py-1 rounded-full mb-4">
                        E-TİCARET & B2B ÇÖZÜMÜ
                    </span>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        Pazaryerleri ve B2B'de <span class="text-primary">Satış Gücünüzü</span> Artırın
                    </h1>
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed max-w-xl">
                        KG Shop ile pazaryerlerini ve kendi B2B/B2C sitenizi tek panelden yönetin. Stok, sipariş, fatura
                        ve kargo süreçlerini otomatikleştirerek zamandan kazanın, kârlılığınızı maksimize edin.
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
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">KG Shop ile Kazanımlarınız</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">İşletmenizin e-ticaret operasyonlarını bir üst
                    seviyeye taşıyacak temel avantajlar.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-dashboard-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Tek Panelden Yönetim</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Tüm pazaryerleri, B2B ve B2C kanallarınızı tek bir
                        arayüzden kontrol ederek karmaşıklığı ortadan kaldırın.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-refresh-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Otomatik Süreçler</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Sipariş, stok senkronizasyonu, e-fatura ve kargo
                        fişi oluşturma gibi tekrarlayan işleri otomatikleştirin.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-archive-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Stok Doğruluğu</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Tüm satış kanallarınızda stokları anlık senkronize
                        ederek 'yok satma' sorununu ve müşteri memnuniyetsizliğini önleyin.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-line-chart-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Kârlılık Analizi</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Kanal ve ürün bazında kârlılık raporları ile
                        stratejik satış kararları alarak gelirinizi maksimize edin.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="sektorler" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Tüm Perakende Sektörleri İçin İdeal</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">İster moda, ister elektronik, isterse ev eşyası
                    satın; KG Shop, her sektörün e-ticaret dinamiklerine uyum sağlar.</p>
            </div>
            <div class="max-w-5xl mx-auto grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8 text-center">
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-t-shirt-air-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Moda & Giyim</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-cpu-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Elektronik</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-home-4-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Ev & Yaşam</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-flask-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Kozmetik & Bakım</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-book-open-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Kitap & Hobi</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-car-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Oto Aksesuar</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-restaurant-2-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Gıda & Süpermarket</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-add-circle-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Ve Daha Fazlası...</p>
                </div>
            </div>
        </div>
    </section>
    <section id="whykorgun" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Neden KG Shop?</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Sadece bir entegrasyon yazılımı değil, dijitaldeki
                    büyüme ortağınız.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="text-center">
                    <div class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full">
                        <i class="ri-links-line text-4xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Tam ERP Entegrasyonu</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">KG Shop, Korgün ERP ile %100 entegre çalışır.
                        Üretimden satışa, muhasebeden depoya tüm verileriniz tek bir akışta, tutarlı ve güncel kalır.
                    </p>
                </div>
                <div class="text-center">
                    <div class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full">
                        <i class="ri-scales-3-line text-4xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Esnek ve Ölçeklenebilir</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Bugün tek bir pazaryeriyle başlayın, yarın onlarca
                        kanala ve kendi B2B sitenize kolayca genişleyin. KG Shop, işinizle birlikte büyür.</p>
                </div>
                <div class="text-center">
                    <div class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full">
                        <i class="ri-customer-service-2-line text-4xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">E-Ticaret Odaklı Destek</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">E-ticaretin dinamiklerini bilen uzman ekibimiz,
                        kurulumdan günlük operasyonlarınıza kadar her adımda size yol gösterir ve destek olur.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="entegrasyon" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="inline-block bg-primary/10 text-primary text-sm font-bold px-3 py-1 rounded-full mb-4">
                        GÜÇLÜ ENTEGRASYON AĞI
                    </span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Tüm E-Ticaret Ekosisteminiz Tek Yerde
                    </h2>
                    <p class="text-lg text-gray-600 mb-6">KG Shop, Türkiye'nin ve dünyanın önde gelen pazaryerleri,
                        kargo firmaları, e-fatura entegratörleri ve ERP sistemleri ile hazır entegrasyonlar sunar.
                        İşinizi büyütmek için ihtiyacınız olan her şey elinizin altında.</p>
                    <a href="<?= DEMO_URL ?>" target="_blank"
                        class="text-lg text-primary font-semibold hover:underline">Demo talep edin <i
                            class="ri-arrow-right-line align-middle"></i></a>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-store-2-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">Pazaryerleri</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-database-2-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">ERP Sistemleri</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-truck-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">Kargo Firmaları</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-file-list-3-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">E-Fatura Entegratörleri</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-shopping-basket-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">B2B/B2C Platformları</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-bank-card-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">Ödeme Sistemleri</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
require_once __DIR__ . '/../templates/footer.php';
?>