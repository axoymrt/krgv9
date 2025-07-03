<?php
require_once __DIR__ . '/../config.php';
$pageTitle = 'e-Showroom | Ürünlerinizi Dünyaya Açan Dijital Vitrin';
$pageDescription = 'Korgün e-Showroom ile bayilerinize ve müşterilerinize 7/24 açık bir dijital sergi alanı sunun. Sipariş süreçlerinizi hızlandırın, satış ağınızı güçlendirin.';
$currentNavItems = $productNavItems;
$breadcrumbTitle = 'e-Showroom';
$pageId = 'eshowroom';
require_once __DIR__ . '/../templates/header.php';
?>
<main class="pt-24 md:pt-20 bg-white">
    <section id="genel-bakis" class="relative bg-gray-100 pt-12">
        <div class="absolute inset-0">
            <img src="../assets/korgunerp-img/985c18show87room.webp"
                alt="Tablet üzerinden e-Showroom kataloğunu inceleyen bir profesyonel"
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
                        B2B & DİJİTAL KATALOG ÇÖZÜMÜ
                    </span>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        Ürünlerinizi Dünyaya Açan <span class="text-primary">Dijital Vitrin</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed max-w-xl">
                        e-Showroom ile fiziksel fuar ve showroom maliyetlerinden kurtulun. Bayilerinize,
                        distribütörlerinize ve müşterilerinize 7/24 açık, zengin içerikli ve interaktif bir dijital
                        katalog sunarak satış süreçlerinizi modernleştirin.
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
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Temel Faydaları</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">e-Showroom'un işletmenize ve satış ağınıza
                    sağlayacağı stratejik avantajlar.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-global-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">7/24 Erişilebilirlik</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Coğrafi sınırlamaları ortadan kaldırın.
                        Ürünleriniz, dünyanın her yerinden bayileriniz ve müşterileriniz için her an erişilebilir olsun.
                    </p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-money-dollar-circle-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Düşük Operasyon Maliyeti</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Fuar katılımı, showroom kirası, basılı katalog ve
                        seyahat masraflarından tasarruf ederek pazarlama bütçenizi verimli kullanın.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-shopping-cart-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Hızlı Sipariş Süreci</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Bayileriniz, güncel stok ve fiyat bilgileriyle
                        doğrudan sistem üzerinden siparişlerini oluşturarak satış sürecini hızlandırır.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-refresh-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Anlık Güncelleme</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Yeni ürünleri, kampanyaları veya fiyat
                        değişikliklerini anında tüm satış ağınıza duyurun. Basılı katalogların getirdiği gecikmelerden
                        kurtulun.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="sektorler" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Sektörünüze Özel Çözümler</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Geniş ürün yelpazesine sahip ve bayi ağı ile çalışan
                    tüm sektörler için ideal bir çözümdür.</p>
            </div>
            <div class="max-w-5xl mx-auto grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8 text-center">
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-shoe-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Ayakkabı & Saraciye</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-t-shirt-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Tekstil & Konfeksiyon</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-scissors-cut-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Deri & Tabakhane</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-tools-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Makine & Metal</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-copper-diamond-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Döküm</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-sofa-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Mobilya</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-paint-brush-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Kimya & Plastik</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-plant-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Gıda & İçecek</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-printer-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Matbaa & Ambalaj</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-car-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Otomotiv Yan Sanayi</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-cpu-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Elektrik & Elektronik</p>
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
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Neden Korgün e-Showroom?</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Standart bir B2B portalından daha fazlası; ERP'nizle
                    bütünleşik çalışan bir satış platformu.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="text-center">
                    <div class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full"><i
                            class="ri-database-2-line text-4xl text-primary"></i></div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Doğrudan ERP Entegrasyonu</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">e-Showroom, Korgün ERP ile anlık olarak konuşur.
                        Stok, fiyat, cari hesap ve sipariş bilgileri çift taraflı ve gerçek zamanlı olarak senkronize
                        olur.</p>
                </div>
                <div class="text-center">
                    <div class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full"><i
                            class="ri-user-settings-line text-4xl text-primary"></i></div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Bayiye Özel Deneyim</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Her bayinize özel fiyat listeleri, iskontolar,
                        ödeme koşulları ve ürün grupları tanımlayın. Bayileriniz sadece kendilerine özel koşulları
                        görür.</p>
                </div>
                <div class="text-center">
                    <div class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full"><i
                            class="ri-image-line text-4xl text-primary"></i></div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Zengin Medya Desteği</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Yüksek çözünürlüklü görseller, ürün videoları, 360
                        derece görüntüler ve teknik dokümanlar ile ürünlerinizi en etkili şekilde sergileyin.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="entegrasyon" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Tüm Ekosisteminizle Bütünleşik</h2>
                    <p class="text-lg text-gray-600 mb-6">e-Showroom, sadece ERP'nizle değil, satış ve pazarlama
                        sürecinizin diğer kritik halkalarıyla da entegre olarak çalışır ve size tam kontrol sağlar.</p>
                    <a href="<?= DEMO_URL ?>" target="_blank"
                        class="text-lg text-primary font-semibold hover:underline">Canlı Demo Talep Edin <i
                            class="ri-arrow-right-line align-middle"></i></a>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm"><i
                            class="ri-server-line text-3xl text-primary"></i><span
                            class="text-lg font-semibold text-gray-700">Korgün ERP</span></div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm"><i
                            class="ri-bank-line text-3xl text-primary"></i><span
                            class="text-lg font-semibold text-gray-700">Online Ödeme Sistemleri</span></div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm"><i
                            class="ri-truck-line text-3xl text-primary"></i><span
                            class="text-lg font-semibold text-gray-700">Kargo Entegrasyonu</span></div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm"><i
                            class="ri-user-heart-line text-3xl text-primary"></i><span
                            class="text-lg font-semibold text-gray-700">CRM Yazılımları</span></div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm"><i
                            class="ri-file-list-3-line text-3xl text-primary"></i><span
                            class="text-lg font-semibold text-gray-700">E-Fatura & E-İrsaliye</span></div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm"><i
                            class="ri-message-2-line text-3xl text-primary"></i><span
                            class="text-lg font-semibold text-gray-700">SMS / E-Posta Bildirimleri</span></div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
require_once __DIR__ . '/../templates/footer.php';
?>