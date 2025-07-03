<?php
require_once __DIR__ . '/../config.php';
$pageTitle = 'KG Palaimon | Uçtan Uca Üretim Kontrolü ve Yönetimi';
$pageDescription = 'Korgün Palaimon ERP ile üretim planlamadan kalite kontrole, tüm süreçlerinizi dijitalleştirin.';
$currentNavItems = $productNavItems;
$breadcrumbTitle = 'KG PALAİMON';
$pageId = 'kgpalaimon';
require_once __DIR__ . '/../templates/header.php';
?>
<main class="pt-24 md:pt-20 bg-white">
    <section id="genel-bakis" class="relative bg-gray-100 pt-12">
        <div class="absolute inset-0">
            <img src="../assets/korgunerp-img/3256tks4587textile.webp" alt="Modern ve teknolojik üretim tesisi"
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
                        ÜRETİM YÖNETİM (ERP) ÇÖZÜMÜ
                    </span>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        Uçtan Uca <span class="text-primary">Üretim Kontrolü</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed max-w-xl">
                        Siparişten sevkiyata kadar her adımı dijitalleştirerek operasyonel verimliliği zirveye taşıyın.
                        Gerçek zamanlı veri takibi ile sorunları anında tespit edin, kaynaklarınızı en verimli şekilde
                        kullanın ve kârlılığınızı artırın.
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
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">KG Palaimon ile Kazanımlarınız</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">İşletmenizin kârlılığını ve verimliliğini artıracak
                    temel avantajlar.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-arrow-up-circle-line text-4xl"></i></div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Verimlilik Artışı</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Otomatikleşen süreçler ve optimize edilmiş planlama
                        ile üretim kapasitenizi maksimuma çıkarın.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-arrow-down-circle-line text-4xl"></i></div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Maliyet Kontrolü</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Fire oranlarını azaltın, stok maliyetlerini düşürün
                        ve kaynaklarınızı en verimli şekilde kullanarak kâr marjınızı artırın.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-eye-line text-4xl"></i></div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Tam İzlenebilirlik</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Hammadde girişinden nihai ürünün sevkiyatına kadar
                        her adımı lot/parti bazında takip ederek kaliteyi garanti altına alın.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-time-line text-4xl"></i></div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Hızlı Karar Alma</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Gerçek zamanlı veriler ve anlık raporlar sayesinde
                        piyasa değişikliklerine anında adapte olun ve stratejik kararlar alın.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="sektorler" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Sektörünüze Özel Çözümler</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">KG Palaimon, ayakkabıdan metale, gıdadan tekstile
                    kadar farklı üretim dinamiklerine sahip birçok sektöre esnek yapısıyla tam uyum sağlar.</p>
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
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Neden KG Palaimon?</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Sadece bir yazılım değil, işletmenizin kendine özgü
                    ihtiyaçları için tasarlanmış bir büyüme ortağıyız.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="text-center">
                    <div class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full">
                        <i class="ri-puzzle-2-line text-4xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Esnek ve Özelleştirilebilir Mimari</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Standart kalıplara sığmayın. KG Palaimon,
                        işletmenizin benzersiz iş akışlarına ve süreçlerine %100 uyum sağlar, yazılım size değil, siz
                        yazılıma yön verirsiniz.</p>
                </div>
                <div class="text-center">
                    <div class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full">
                        <i class="ri-dashboard-3-line text-4xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Kullanıcı Odaklı Arayüz</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Karmaşık ekranlar ve uzun eğitim süreçlerini
                        unutun. Her seviyeden kullanıcının hızla adapte olabileceği modern, anlaşılır ve sezgisel
                        arayüzlerle verimliliği artırın.</p>
                </div>
                <div class="text-center">
                    <div class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full">
                        <i class="ri-customer-service-2-line text-4xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Proje Boyunca Uzman Destek</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Yazılımı kurup gitmiyoruz. Analiz, kurulum, eğitim
                        ve canlıya geçiş sonrası süreçlerde tecrübeli danışman kadromuzla yanınızda olarak başarınızı
                        garanti altına alıyoruz.</p>
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Mevcut Sistemlerinizle Tam Uyum</h2>
                    <p class="text-lg text-gray-600 mb-6">KG Palaimon, tek başına bir güç merkezi olmasının yanı sıra,
                        kullandığınız diğer yazılımlarla da sorunsuz bir şekilde entegre olur. Veri silolarını ortadan
                        kaldırarak işletmenizin bütünleşik ve akıllı bir altyapıya kavuşmasını sağlar.</p>
                    <a href="<?= DEMO_URL ?>" target="_blank"
                        class="text-lg text-primary font-semibold hover:underline">Entegrasyon detaylarını öğrenin <i
                            class="ri-arrow-right-line align-middle"></i></a>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-bank-card-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">Muhasebe & Finans</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-user-heart-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">CRM Yazılımları</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-shopping-basket-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">E-Ticaret Platformları</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-barcode-box-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">El Terminalleri</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-truck-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">Kargo & Lojistik</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-code-box-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">Özel API Entegrasyonları</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
require_once __DIR__ . '/../templates/footer.php';
?>