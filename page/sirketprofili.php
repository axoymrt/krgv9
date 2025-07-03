<?php
require_once __DIR__ . '/../config.php';
$pageTitle = 'Şirket Profili | Korgün Yazılım Hakkında';
$pageDescription = '1992 yılından bugüne, KOBİ\'lerin dijital dönüşüm yolculuğuna liderlik eden Korgün Yazılım\'ın tarihçesi, misyonu ve vizyonu.';
$currentNavItems = $pageNavItems;
$breadcrumbTitle = 'ŞİRKET PROFİLİ';
$pageId = 'sirketprofili';
require_once __DIR__ . '/../templates/header.php';
?>
<main class="pt-24 md:pt-20 bg-white">
    <section id="genel-bakis" class="relative bg-gray-100 pt-12">
        <div class="absolute inset-0">
            <img src="../assets/korgunerp-img/01korgun19erp92bysd.webp" alt="Korgün Yazılım ofisinden bir görünüm"
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
                        KORGÜN YAZILIM
                    </span>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        Dijital Dönüşümde <span class="text-primary">33 Yılı Aşkın</span> Tecrübe
                    </h1>
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed max-w-xl">
                        1992'den beri, KOBİ'lerin ve büyüyen işletmelerin operasyonel mükemmelliğe ulaşması için
                        yenilikçi ERP ve ticari yazılım çözümleri üretiyoruz. Teknolojiyi işinize değer katacak bir güce
                        dönüştürüyoruz.
                    </p>
                </div>
                <div></div>
            </div>
        </div>
    </section>
    <?php
    require_once __DIR__ . '/../templates/sections/pagesticky-nav.php';
    ?>
    <section id="tarihce" class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Köklerimizden Geleceğe Uzanan Yolculuk
                    </h2>
                    <p class="text-lg text-gray-700 mb-4">
                        Korgün Yazılım, 1992 yılında %100 yerli sermaye ile kuruldu. O günden bugüne, değişen pazar
                        koşullarına ve teknolojik gelişmelere hızla adapte olarak, müşterilerimize her zaman en güncel
                        ve en verimli çözümleri sunma misyonuyla hareket ettik.
                    </p>
                    <p class="text-lg text-gray-700">
                        DOS tabanlı ilk ticari yazılımımızdan bulut tabanlı modern ERP platformlarımıza kadar uzanan bu
                        yolculukta, binlerce işletmenin dijitalleşmesine tanıklık ettik ve bu dönüşümün bir parçası
                        olmaktan gurur duyuyoruz.
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-slate-100 p-6 rounded-lg text-center">
                        <span class="block text-4xl font-bold text-primary">1992</span>
                        <span class="block text-gray-600 mt-1">Kuruluş</span>
                    </div>
                    <div class="bg-slate-100 p-6 rounded-lg text-center">
                        <span class="block text-4xl font-bold text-primary">2000</span>
                        <span class="block text-gray-600 mt-1">İlk ERP Çözümü</span>
                    </div>
                    <div class="bg-slate-100 p-6 rounded-lg text-center">
                        <span class="block text-4xl font-bold text-primary">2014</span>
                        <span class="block text-gray-600 mt-1">E-Dönüşüm Entegrasyonları</span>
                    </div>
                    <div class="bg-slate-100 p-6 rounded-lg text-center">
                        <span class="block text-4xl font-bold text-primary">2005+</span>
                        <span class="block text-gray-600 mt-1">Bulut ve Mobil Teknolojiler</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="misyon-vizyon" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-white p-8 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-16 h-16 bg-primary/10 text-primary rounded-full flex items-center justify-center mr-6">
                            <i class="ri-rocket-line text-3xl"></i>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-800">Misyonumuz</h3>
                    </div>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Türkiye'deki işletmelerin, özellikle KOBİ'lerin, dijital dönüşüm süreçlerini kolaylaştıran,
                        verimliliklerini artıran, uluslararası standartlarda, esnek ve kullanıcı dostu yazılım çözümleri
                        geliştirmek ve sürdürülebilir başarılarına katkıda bulunmaktır.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-16 h-16 bg-primary/10 text-primary rounded-full flex items-center justify-center mr-6">
                            <i class="ri-lightbulb-flash-line text-3xl"></i>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-800">Vizyonumuz</h3>
                    </div>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        ERP ve iş yazılımları alanında, yenilikçi teknolojileri ve derin sektör tecrübemizi
                        birleştirerek Türkiye'nin en çok tercih edilen ve güvenilen teknoloji ortağı olmak; yerli
                        yazılım gücümüzü uluslararası pazarlara taşımaktır.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="degerler" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Temel Değerlerimiz</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Başarımızın ve iş yapış şeklimizin temelini oluşturan
                    ilkelerimiz.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-14 h-14 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-user-heart-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Müşteri Odaklılık</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Müşterilerimizin başarısını kendi başarımız olarak
                        görür, ihtiyaçlarını anlamak ve en doğru çözümü sunmak için çalışırız.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-14 h-14 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-recycle-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Sürekli Gelişim</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Teknolojiyi ve sektör trendlerini yakından takip
                        eder, ürünlerimizi ve hizmetlerimizi sürekli olarak iyileştiririz.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-14 h-14 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-shield-user-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Güvenilirlik</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Tüm iş süreçlerimizde şeffaf, dürüst ve etik
                        ilkelere bağlı kalarak paydaşlarımızla güvene dayalı ilişkiler kurarız.</p>
                </div>
                <div class="text-center p-6">
                    <div
                        class="inline-flex items-center justify-center w-14 h-14 bg-red-100 text-primary rounded-full mb-6">
                        <i class="ri-team-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Takım Çalışması</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Farklı uzmanlıklara sahip ekibimizin uyum içinde
                        çalışmasıyla ortak hedeflere ulaşır, başarıyı birlikte kutlarız.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
require_once __DIR__ . '/../templates/footer.php';
?>