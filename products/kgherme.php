<?php
require_once __DIR__ . '/../config.php';
$pageTitle = 'KG Herme | Ticari Paket ve Finans Yönetimi Çözümü';
$pageDescription = 'KG Herme ile muhasebe, finans, stok, satın alma, satış ve personel yönetimi gibi tüm temel ticari süreçlerinizi tek bir çatı altında toplayın.';
$currentNavItems = $productNavItems;
$breadcrumbTitle = 'KG HERME';
$pageId = 'kgherme';
require_once __DIR__ . '/../templates/header.php';
?>
<main class="pt-24 md:pt-20 bg-white">
    <section id="genel-bakis" class="relative bg-gray-100 pt-12">
        <div class="absolute inset-0">
            <img src="../assets/korgunerp-img/38a5b335bff4ed879b7c0255f61332b81.webp"
                alt="Ofis ortamında finansal verileri inceleyen profesyonel" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-white/60"></div>
        </div>
        <div
            class="relative container mx-auto px-4 grid grid-cols-12 items-center min-h-[calc(100vh-140px)] md:min-h-[calc(100vh-180px)]">
            <div
                class="col-span-12 md:col-span-7 lg:col-span-6 
            bg-white/80 backdrop-opacity-md p-6 md:p-8 rounded-xl shadow-lg shadow-md hover:shadow-xl transition-all duration-300">
                <div class="z-10">
                    <span class="inline-block bg-primary/10 text-primary text-sm font-bold px-3 py-1 rounded-full mb-4">
                        TİCARİ PAKET ÇÖZÜMÜ
                    </span>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        Şirketinizin <span class="text-primary">Finansal ve Operasyonel</span> Kalbi
                    </h1>
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed max-w-xl">
                        KG Herme ile muhasebe, finans, stok, satın alma, satış ve personel yönetimi gibi tüm temel
                        ticari süreçlerinizi tek bir çatı altında toplayın. İşletmenizin verimliliğini artırın ve
                        kârlılığınızı kontrol altına alın.
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
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">KG Herme ile Kazanımlarınız</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">İşletmenizin omurgasını güçlendirecek temel
                    avantajlar.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-links-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Bütünleşik Yönetim</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Muhasebeden stoka, satıştan finansa tüm
                        departmanlarınız aynı veri üzerinden çalışır, veri tutarsızlıkları son bulur.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-pie-chart-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Güçlü Finansal Kontrol</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Nakit akışı, banka işlemleri, çek/senet takibi ve
                        bütçe yönetimi ile şirketinizin mali sağlığını anlık olarak izleyin.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-archive-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Verimli Stok Yönetimi</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Anlık stok takibi, minimum/maksimum seviye
                        uyarıları ve detaylı maliyet analizleri ile envanterinizi optimize edin.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-file-list-3-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Mevzuata Tam Uyum</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">E-Dönüşüm (e-Fatura, e-Arşiv, e-Defter vb.)
                        çözümleriyle yasal yükümlülüklerinizi kolayca ve zamanında yerine getirin.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="sektorler" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Tüm Ticari İşletmeler İçin</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">KG Herme, sektörden bağımsız olarak hizmet, ticaret
                    ve dağıtım firmalarının temel ihtiyaçlarına cevap verir.</p>
            </div>
            <div class="max-w-5xl mx-auto grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8 text-center">
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-store-3-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Toptan & Perakende</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-truck-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Dağıtım & Lojistik</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-customer-service-2-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Hizmet Sektörü</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-earth-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">İthalat & İhracat</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-building-4-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">İnşaat & Taahhüt</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-book-2-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Eğitim Kurumları</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-hospital-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Sağlık Kuruluşları</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-add-circle-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Ve Diğerleri...</p>
                </div>
            </div>
        </div>
    </section>
    <section id="whykorgun" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Neden KG Herme?</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Sadece bir ticari paket değil, işinizi anlayan ve
                    sizinle birlikte gelişen bir çözüm ortağı.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="text-center">
                    <div class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full">
                        <i class="ri-puzzle-2-line text-4xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Modüler ve Esnek Yapı</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">İhtiyacınız olan modüllerle başlayın, işletmeniz
                        büyüdükçe yeni modüller ekleyerek yazılımınızı kolayca genişletin.</p>
                </div>
                <div class="text-center">
                    <div class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full">
                        <i class="ri-dashboard-3-line text-4xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Kolay Kullanım</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Karmaşık muhasebe ve finans işlemlerini bile
                        basitleştiren, anlaşılır ve sezgisel arayüzler ile adaptasyon sürecini hızlandırın.</p>
                </div>
                <div class="text-center">
                    <div class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full">
                        <i class="ri-links-line text-4xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Geniş Entegrasyon Kabiliyeti</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Üretim (MRP), E-Ticaret, CRM ve diğer özel
                        yazılımlarınızla sorunsuz entegre olarak bütünleşik bir yapı kurun.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="entegrasyon" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="inline-block bg-primary/10 text-primary text-sm font-bold px-3 py-1 rounded-full mb-4">
                        E-DÖNÜŞÜM VE ENTEGRASYON
                    </span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Dijital Dönüşümün Merkezinde</h2>
                    <p class="text-lg text-gray-600 mb-6">KG Herme, GİB uyumlu e-Dönüşüm çözümleriyle (e-Fatura,
                        e-Defter vb.) sizi dijital dünyaya taşır. Banka, kargo ve diğer iş ortaklarınızla entegre olarak
                        operasyonel verimliliği artırır.</p>
                    <a href="<?= DEMO_URL ?>" target="_blank"
                        class="text-lg text-primary font-semibold hover:underline">Entegrasyonları keşfedin <i
                            class="ri-arrow-right-line align-middle"></i></a>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-file-list-3-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">E-Fatura & E-Arşiv</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-truck-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">E-İrsaliye</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-book-mark-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">E-Defter</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-bank-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">Banka Entegrasyonları</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-tools-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">MRP & Üretim Sistemleri</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-shopping-cart-2-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">E-Ticaret & Pazaryerleri</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
require_once __DIR__ . '/../templates/footer.php';
?>