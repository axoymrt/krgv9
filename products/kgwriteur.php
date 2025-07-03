<?php
require_once __DIR__ . '/../config.php';
$pageTitle = 'KG WriteUr | Barkodlu Depo Yönetim Sistemi (WMS)';
$pageDescription = 'KG WriteUr ile depo süreçlerinizi dijitalleştirin. Barkod ve el terminalleriyle mal kabul, sipariş toplama ve sevkiyat operasyonlarında hızı ve hassasiyeti yakalayın.';
$currentNavItems = $productNavItems;
$breadcrumbTitle = 'KG WRITEUR';
$pageId = 'kgwriteur';
require_once __DIR__ . '/../templates/header.php';
?>

<main class="pt-24 md:pt-20 bg-white">
    <section id="genel-bakis" class="relative bg-gray-100 pt-12">
        <div class="absolute inset-0">
            <img src="../assets/korgunerp-img/4567drsc55tr7494fta2.webp"
                alt="El terminali ile depoda barkod okutan çalışan" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-white/60"></div>
    </div>
    <div
        class="relative container mx-auto px-4 grid grid-cols-12 items-center min-h-[calc(100vh-140px)] md:min-h-[calc(100vh-180px)]">
        <div class="col-span-12 md:col-span-7 lg:col-span-6 
            bg-white/80 backdrop-opacity-md p-6 md:p-8 rounded-xl shadow-lg shadow-md hover:shadow-xl transition-all duration-300">
                <div class="z-10">
                    <span class="inline-block bg-primary/10 text-primary text-sm font-bold px-3 py-1 rounded-full mb-4">
                        BARKODLU DEPO YÖNETİMİ (KG WriteUr)
                    </span>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        Deponuzun <span class="text-primary">Kontrolü</span> Parmaklarınızın Ucunda
                    </h1>
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed max-w-xl">
                        Manuel işlemlerin getirdiği hatalara ve yavaşlığa son verin. KG WriteUr, el terminalleri
                        üzerinden yürüttüğü barkodlu işlemlerle mal kabulden sevkiyata kadar tüm depo operasyonlarınızı
                        hatasız ve ışık hızında yönetmenizi sağlar.
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
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">WriteUr ile Deponuzun DNA'sını Değiştirin
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Depo operasyonlarınızda devrim yaratacak temel
                    kazanımlar.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-shield-check-line text-4xl"></i></div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Sıfıra Yakın Hata Oranı</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Barkodlu takip sayesinde yanlış ürün toplama,
                        hatalı sevkiyat ve eksik mal kabul gibi sorunları ortadan kaldırın.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-rocket-2-line text-4xl"></i></div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Operasyonel Hız Artışı</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Sipariş toplama, stok sayımı ve yerleştirme gibi
                        süreçleri manuel yöntemlere göre kat kat daha hızlı tamamlayın.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-eye-2-line text-4xl"></i></div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Anlık Stok Doğruluğu</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Deponuzdaki her bir ürünün lokasyonu ve miktarı
                        hakkında anlık ve %100 doğru bilgiye sahip olun.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-route-line text-4xl"></i></div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Tam İzlenebilirlik</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Bir ürünün depoya girişinden müşteriye sevk edilene
                        kadarki tüm hareketlerini parti/lot ve seri no bazında takip edin.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="sektorler" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Sektörünüze Özel Çözümler</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">KG WriteUr, farklı üretim dinamiklerine sahip birçok
                    sektöre esnek yapısıyla tam uyum sağlar.</p>
            </div>
            <div class="max-w-6xl mx-auto grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-8 text-center">
                <div class="group p-4">
                    <i
                        class="ri-inbox-unarchive-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Mal Kabul</p>
                </div>
                <div class="group p-4">
                    <i
                        class="ri-corner-right-down-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Yerleştirme</p>
                </div>
                <div class="group p-4">
                    <i
                        class="ri-shopping-basket-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Sipariş Toplama</p>
                </div>
                <div class="group p-4">
                    <i
                        class="ri-checkbox-multiple-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Kontrol & Paketleme</p>
                </div>
                <div class="group p-4">
                    <i
                        class="ri-truck-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Sevkiyat</p>
                </div>
                <div class="group p-4">
                    <i
                        class="ri-refresh-line text-5xl text-primary mb-3 transition-transform duration-300 group-hover:scale-110"></i>
                    <p class="font-semibold text-gray-700">Stok Sayımı</p>
                </div>
            </div>
        </div>
    </section>

    <section id="whykorgun" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div>
                    <img src="../assets/korgunerp-img/4567drsc55tr74.webp"
                        alt="El terminali kullanan bir depo personeli" class="rounded-lg shadow-xl">
                </div>
                <div>
                    <span class="inline-block bg-primary/10 text-primary text-sm font-bold px-3 py-1 rounded-full mb-4">
                        FARKI YAŞAYIN
                    </span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Neden KG WriteUr?</h2>
                    <ul class="space-y-6">
                        <li class="flex items-start">
                            <i class="ri-smartphone-line text-3xl text-primary mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">Tüm El Terminalleri ile Uyumlu</h3>
                                <p class="text-lg text-gray-600 leading-relaxed">Marka ve modelden bağımsız, Android
                                    tabanlı tüm endüstriyel el terminalleri üzerinde sorunsuz çalışır.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="ri-links-line text-3xl text-primary mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">ERP ile Tam Entegrasyon</h3>
                                <p class="text-lg text-gray-600 leading-relaxed">Korgün ERP veya mevcut diğer ERP
                                    yazılımlarınızla %100 entegre çalışarak veri tutarlılığını garanti eder.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="ri-user-smile-line text-3xl text-primary mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">Kullanıcı Odaklı Arayüz</h3>
                                <p class="text-lg text-gray-600 leading-relaxed">Depo personelinizin hızlıca adapte
                                    olacağı, büyük butonlu ve anlaşılır ekranlar sayesinde eğitim süresini minimuma
                                    indirir.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="entegrasyon" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="inline-block bg-primary/10 text-primary text-sm font-bold px-3 py-1 rounded-full mb-4">
                        KUSURSUZ UYUM
                    </span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">ERP ve Diğer Sistemlerle Bütünleşik
                    </h2>
                    <p class="text-lg text-gray-600 mb-6">KG WriteUr tek başına çalışmaz; işletmenizin kalbi olan ERP
                        sisteminizle ve diğer kritik operasyonel yazılımlarınızla tam entegre çalışarak veri akışını
                        otomatikleştirir ve size anlık, doğru bilgi sağlar.</p>
                    <a href="<?= DEMO_URL ?>" target="_blank"
                        class="text-lg text-primary font-semibold hover:underline">Entegrasyon Yeteneklerini Keşfedin <i
                            class="ri-arrow-right-line align-middle"></i></a>
                </div>
                <div class="grid grid-cols-2 gap-6">

                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-server-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">Korgün ERP Entegrasyonu</span>
                    </div>

                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-tools-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">Üretim (MRP) Sistemleri</span>
                    </div>

                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-file-list-3-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">Ticari (Finans) Paketler</span>
                    </div>

                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-shopping-cart-2-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">E-Ticaret & Pazaryerleri</span>
                    </div>

                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-truck-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">Kargo & Lojistik Firmaları</span>
                    </div>

                    <div class="bg-white p-6 rounded-lg flex items-center gap-4 shadow-sm">
                        <i class="ri-printer-line text-3xl text-primary"></i>
                        <span class="text-lg font-semibold text-gray-700">Barkod Yazıcılar</span>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<?php
require_once __DIR__ . '/../templates/footer.php';
?>