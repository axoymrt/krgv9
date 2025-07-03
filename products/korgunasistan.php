<?php
require_once __DIR__ . '/../config.php';
$pageTitle = 'Korgün Asistan | İşletmeniz Cebinizde, Kontrol Sizde';
$pageDescription = 'Korgün Asistan mobil ERP çözümü ile satış, depo ve üretim süreçlerinizi anlık olarak sahadan yönetin. Gerçek zamanlı veri girişi ile verimliliği artırın.';
$currentNavItems = $productNavItems;
$breadcrumbTitle = 'KORGÜN ASİSTAN';
$pageId = 'korgunasistan';
require_once __DIR__ . '/../templates/header.php';
?>
<main class="pt-24 md:pt-20 bg-white">
    <section id="genel-bakis" class="relative bg-gray-100 pt-12">
        <div class="absolute inset-0">
            <img src="../assets/korgunerp-img/98mob47asistankrg.webp"
                alt="Korgün Asistan mobil uygulamasını kullanan bir çalışan" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-white/60"></div>
        </div>
        <div
            class="relative container mx-auto px-4 grid grid-cols-12 items-center min-h-[calc(100vh-140px)] md:min-h-[calc(100vh-180px)]">
            <div
                class="col-span-12 md:col-span-7 lg:col-span-6 
            bg-white/80 backdrop-opacity-md p-6 md:p-8 rounded-xl shadow-lg shadow-md hover:shadow-xl transition-all duration-300">
                <div class="z-10">
                    <span class="inline-block bg-primary/10 text-primary text-sm font-bold px-3 py-1 rounded-full mb-4">
                        MOBİL ERP ÇÖZÜMÜ
                    </span>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        İşletmeniz <span class="text-primary">Cebinizde</span>, Kontrol Sizde
                    </h1>
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed max-w-xl">
                        Korgün Asistan ile ofise bağımlı kalmadan tüm operasyonlarınızı sahadan yönetin. Satış
                        temsilcileriniz, depo görevlileriniz ve yöneticileriniz için tasarlanan mobil arayüzlerle iş
                        akışlarınızı hızlandırın ve anlık kararlar alın.
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
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Sahadaki operasyonel gücünüzü artırarak işletmenize
                    anında değer katın.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-rocket-line text-4xl"></i></div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Saha Satış Gücü</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Siparişleri anında alın, müşteri bilgilerine anlık
                        ulaşın ve tahsilatlarınızı sahadan gerçekleştirin.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-database-2-line text-4xl"></i></div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Anlık Stok Kontrolü</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Depo işlemlerini el terminalleri ile hızlandırın,
                        envanterinizi gerçek zamanlı olarak takip edin ve hataları sıfıra indirin.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-line-chart-line text-4xl"></i></div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Yönetici Raporları</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Nerede olursanız olun, şirketinizin anlık finansal
                        durumu, satış performansı ve üretim verileri cebinizde.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-settings-3-line text-4xl"></i></div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Üretim Takibi</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Operatörlerin üretim verilerini anlık olarak
                        girmesini sağlayarak, iş emri durumlarını ve verimliliği sahadan izleyin.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="sektorler" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Sektörler</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Korgün Asistan, Korgün ERP'nin çalıştığı tüm
                    sektörlerde sahadaki ekiplerinizin verimliliğini artırmak için tasarlanmıştır.</p>
            </div>
            <div class="max-w-5xl mx-auto grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8 text-center">
                <div class="group p-4 rounded-lg"><i class="ri-store-2-line text-5xl text-primary mb-3"></i>
                    <p class="font-semibold text-gray-700">Perakende & Mağazacılık</p>
                </div>
                <div class="group p-4 rounded-lg"><i class="ri-truck-line text-5xl text-primary mb-3"></i>
                    <p class="font-semibold text-gray-700">Dağıtım & Lojistik</p>
                </div>
                <div class="group p-4 rounded-lg"><i class="ri-customer-service-2-line text-5xl text-primary mb-3"></i>
                    <p class="font-semibold text-gray-700">Teknik Servis</p>
                </div>
                <div class="group p-4 rounded-lg"><i class="ri-tools-line text-5xl text-primary mb-3"></i>
                    <p class="font-semibold text-gray-700">Üretim Sahası</p>
                </div>
                <div class="group p-4 rounded-lg"><i class="ri-building-4-line text-5xl text-primary mb-3"></i>
                    <p class="font-semibold text-gray-700">İnşaat & Şantiye</p>
                </div>
                <div class="group p-4 rounded-lg"><i class="ri-first-aid-kit-line text-5xl text-primary mb-3"></i>
                    <p class="font-semibold text-gray-700">Sağlık</p>
                </div>
                <div class="group p-4 rounded-lg"><i class="ri-shield-user-line text-5xl text-primary mb-3"></i>
                    <p class="font-semibold text-gray-700">Satış & Pazarlama</p>
                </div>
                <div class="group p-4 rounded-lg"><i class="ri-add-circle-line text-5xl text-primary mb-3"></i>
                    <p class="font-semibold text-gray-700">Ve Daha Fazlası...</p>
                </div>
            </div>
        </div>
    </section>
    <section id="whykorgun" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Neden Korgün ERP Ekosistemi?</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Korgün Asistan, tek başına bir uygulama değil, Korgün
                    ERP'nin gücünü ve esnekliğini sahaya taşıyan stratejik bir parçasıdır.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="text-center">
                    <div class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full"><i
                            class="ri-server-line text-4xl text-primary"></i></div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Tek ve Bütünleşik Sistem</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Sahada girilen her veri, anında merkez ofisteki ERP
                        sistemine yansır. Veri tutarlılığı, anlık raporlama ve hatasız iş akışı sağlar.</p>
                </div>
                <div class="text-center">
                    <div class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full"><i
                            class="ri-dashboard-3-line text-4xl text-primary"></i></div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Kullanıcı Odaklı Deneyim</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Karmaşık mobil ekranlar yerine, her rolün (satış,
                        depo, yönetici) ihtiyacına özel tasarlanmış sezgisel ve hızlı arayüzler sunar.</p>
                </div>
                <div class="text-center">
                    <div class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full"><i
                            class="ri-shield-check-line text-4xl text-primary"></i></div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Güvenlik ve Yetkilendirme</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Kullanıcı bazlı yetkilendirme sayesinde her çalışan
                        sadece sorumlu olduğu verilere ve menülere erişebilir, veri güvenliği en üst seviyede tutulur.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="entegrasyon" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Entegrasyon</h2>
                    <p class="text-lg text-gray-600 mb-6">Korgün Asistan, Korgün ERP'nin tüm entegrasyon gücünü mobil
                        cihazlara taşır. E-belge sistemleri, kargo firmaları ve diğer tüm üçüncü parti yazılımlarınızla
                        sahadan iletişim kurun.</p>
                    <a href="<?= DEMO_URL ?>" target="_blank"
                        class="text-lg text-primary font-semibold hover:underline">Entegrasyon yeteneklerini keşfedin <i
                            class="ri-arrow-right-line align-middle"></i></a>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm"><i
                            class="ri-printer-cloud-line text-3xl text-primary"></i><span
                            class="text-lg font-semibold text-gray-700">Mobil E-Fatura</span></div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm"><i
                            class="ri-bank-card-line text-3xl text-primary"></i><span
                            class="text-lg font-semibold text-gray-700">Online Tahsilat</span></div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm"><i
                            class="ri-barcode-box-line text-3xl text-primary"></i><span
                            class="text-lg font-semibold text-gray-700">Barkod Okuma</span></div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm"><i
                            class="ri-map-pin-line text-3xl text-primary"></i><span
                            class="text-lg font-semibold text-gray-700">Konum Servisleri</span></div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm"><i
                            class="ri-camera-line text-3xl text-primary"></i><span
                            class="text-lg font-semibold text-gray-700">Kamera Entegrasyonu</span></div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm"><i
                            class="ri-bluetooth-connect-line text-3xl text-primary"></i><span
                            class="text-lg font-semibold text-gray-700">Mobil Yazıcılar</span></div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
require_once __DIR__ . '/../templates/footer.php';
?>