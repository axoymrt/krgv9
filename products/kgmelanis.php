<?php
require_once __DIR__ . '/../config.php';

$pageTitle = 'KG Melanis | Bulut Tabanlı ERP ile Masrafları Azaltın';
$pageDescription = 'KG Melanis bulut kiralama modeliyle donanım, lisans ve bakım maliyetlerini ortadan kaldırın. Az zamanda çok yol alın, iş süreçlerinizi verimli yönetin.';
$currentNavItems = $productNavItems;
$breadcrumbTitle = 'KG Melanis';
$pageId = 'kgmelanis';

require_once __DIR__ . '/../templates/header.php';
?>
<main class="pt-24 md:pt-20 bg-white">

    <section id="genel-bakis" class="relative bg-gray-100 pt-12">
        <div class="absolute inset-0">

            <img src="../assets/korgunerp-img/48bcf1287thj88kts.webp"
                alt="Bulut teknolojisi ve sunucu altyapısını temsil eden arkaplan" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-white/60"></div>
        </div>
        <div
            class="relative container mx-auto px-4 grid grid-cols-12 items-center min-h-[calc(100vh-140px)] md:min-h-[calc(100vh-180px)]">
            <div
                class="col-span-12 md:col-span-7 lg:col-span-6 
            bg-white/80 backdrop-opacity-md p-6 md:p-8 rounded-xl shadow-lg shadow-md hover:shadow-xl transition-all duration-300">
                <div class="z-10">
                    <span class="inline-block bg-primary/10 text-primary text-sm font-bold px-3 py-1 rounded-full mb-4">
                        BULUT TABANLI ERP KİRALAMA MODELİ
                    </span>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        Az Zamanda <span class="text-primary">Çok Yol Alın</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed max-w-xl">
                        Yüksek donanım, işletim sistemi, veritabanı lisansı ve yedekleme maliyetlerini ortadan kaldırın.
                        KG Melanis ile tüm altyapı yüklerinden kurtulun ve sadece işinize odaklanın.
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
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">KG Melanis'in işletmenize sağlayacağı maliyet ve
                    operasyon avantajları.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-money-dollar-circle-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Sıfır Altyapı Maliyeti</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Yüksek donanım, sunucu, işletim sistemi ve
                        veritabanı lisans masraflarını tamamen ortadan kaldırın. Bütçenizi işinizi büyütmek için
                        kullanın.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-cloud-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Esnek Kiralama Modeli</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Yüksek başlangıç yatırımı yapmadan, aylık/yıllık
                        kiralama modeliyle Korgün ERP'nin gücünden hemen faydalanmaya başlayın.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-shield-check-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Güvenlik ve Bakım Dahil</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Veri güvenliği, sunucu bakımı ve yedekleme gibi
                        teknik işlemlerle uğraşmayın. Korgün, tüm altyapıyı sizin için yönetir.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="sektorler" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Paket İçeriğindeki Güçlü Modüller</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">KG Melanis, işinizi bir sonraki seviyeye taşıyacak
                    kritik modülleri standart olarak sunar.</p>
            </div>
            <div class="max-w-5xl mx-auto grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8 text-center">
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-government-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">E-Devlet Modülleri</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-barcode-box-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Depo Barkod Sistemi</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-robot-2-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Proses Üretim Takibi</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-database-2-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Veritabanı Yönetimi</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-line-chart-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Detaylı Raporlama</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-refresh-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Otomatik Güncellemeler</p>
                </div>
                <div class="group p-4 rounded-lg hover:bg-white hover:shadow-lg transition-all duration-300">
                    <i
                        class="ri-user-settings-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Kullanıcı Yönetimi</p>
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
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Neden KG Melanis?</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Geleneksel ERP sistemlerine göre neden daha avantajlı
                    ve verimli bir çözüm?</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="text-center">
                    <div class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full"><i
                            class="ri-rocket-line text-4xl text-primary"></i></div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Hızlı Kurulum ve Devreye Alma</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Fiziksel sunucu kurulumu, konfigürasyon gibi uzun
                        süreçleri atlayın. Bulut altyapısı sayesinde sisteme anında erişim sağlayın ve kullanmaya
                        başlayın.</p>
                </div>
                <div class="text-center">
                    <div class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full"><i
                            class="ri-scales-3-line text-4xl text-primary"></i></div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Ölçeklenebilir Yapı</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">İşletmeniz büyüdükçe yeni donanım yatırımları
                        yapmanıza gerek kalmaz. İhtiyaçlarınıza göre kaynaklarınız (kullanıcı sayısı, depolama vb.)
                        kolayca artırılır.</p>
                </div>
                <div class="text-center">
                    <div class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full"><i
                            class="ri-global-line text-4xl text-primary"></i></div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Lokasyon Bağımsız Erişim</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">İnternet olan her yerden sisteminize güvenli bir
                        şekilde bağlanın. Ofis dışında, seyahatte veya farklı şubelerden verilerinize anlık olarak
                        ulaşın.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="entegrasyon" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Tüm Süreçlerinizle Tam Uyumlu</h2>
                    <p class="text-lg text-gray-600 mb-6">KG Melanis, e-devletten ödeme sistemlerine kadar işletmenizin
                        ihtiyaç duyduğu tüm kritik halkalarla entegre çalışarak size merkezi bir kontrol sunar.</p>
                    <a href="<?= DEMO_URL ?>" target="_blank"
                        class="text-lg text-primary font-semibold hover:underline">Canlı Demo Talep Edin <i
                            class="ri-arrow-right-line align-middle"></i></a>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm"><i
                            class="ri-server-line text-3xl text-primary"></i><span
                            class="text-lg font-semibold text-gray-700">Korgün ERP Çekirdeği</span></div>
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