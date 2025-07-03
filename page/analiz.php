<?php
require_once __DIR__ . '/../config.php';
$pageTitle = 'ERP Analizi | İşletmenizin Verimlilik Karnesi';
$pageDescription = 'Mevcut süreçlerinizdeki verimsizlikleri ve kâr kayıplarını keşfedin. ERP analizi ile işletmenizin potansiyelini ortaya çıkarın.';
$currentNavItems = $analizNavItems;
$breadcrumbTitle = 'ANALİZ';
$pageId = 'analiz';
require_once __DIR__ . '/../templates/header.php';
?>
<main class="pt-24 md:pt-20 bg-white">
    <section id="genel-bakis" class="relative bg-gray-100 pt-12">
        <div class="absolute inset-0">
            <img src="../assets/korgunerp-img/2an548liz897.webp" alt="Modern ve teknolojik üretim tesisi"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-white/60"></div>
        </div>
        <div
            class="relative container mx-auto px-4 grid grid-cols-12 items-center min-h-[calc(100vh-140px)] md:min-h-[calc(100vh-180px)]">
            <div
                class="col-span-12 md:col-span-7 lg:col-span-6 
            bg-white/80 backdrop-opacity-md p-6 md:p-8 rounded-xl shadow-lg shadow-md hover:shadow-xl transition-all duration-300">
                <div class="z-10">
                    <span class="inline-block px-3 py-1 mb-4 text-sm font-bold rounded-full bg-primary/10 text-primary">
                        ERP SÜREÇ ANALİZİ
                    </span>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        İşletmenizin <span class="text-primary">Gizli Potansiyelini</span> Keşfedin
                    </h1>
                    <p class="mb-8 text-lg text-gray-700 md:text-xl max-w-xl">
                        Rakipleriniz dijitalleşirken, siz hala eski yöntemlerle mi zaman kaybediyorsunuz? Pazarın hızına
                        yetişmek ve geleceğe hazır olmak için, operasyonel kör noktalarınızı aydınlatmalısınız.
                    </p>
                </div>
                <div></div>
            </div>
        </div>
    </section>
    <?php
    require_once __DIR__ . '/../templates/sections/pagesticky-nav.php';
    ?>
    <section id="performance" class="py-16 bg-white">
        <div class="container px-4 mx-auto">
            <div class="p-6 bg-white md:p-8">
                <div class="mb-8 text-center">
                    <h2 class="mb-4 text-3xl font-bold md:text-4xl">Üretim Performansınızı Analiz Edin</h2>
                    <p class="max-w-2xl mx-auto text-lg text-gray-600">Korgün ERP ile üretim verilerinizi görselleştirin
                        ve analiz edin.</p>
                </div>
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                    <div id="efficiencyChart" class="h-80"></div>
                    <div id="productionChart" class="h-80"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="problems" class="py-16 bg-gray-50">
        <div class="container px-4 mx-auto">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-gray-900 md:text-4xl">Üretim Süreçlerindeki Problemler</h2>
                <p class="max-w-3xl mx-auto text-lg text-gray-600">Günümüz üretim tesislerinde karşılaşılan en yaygın
                    sorunlar ve bunların işletmenize etkisi.</p>
            </div>
            <div class="grid grid-cols-1 gap-12 md:grid-cols-2">
                <div class="space-y-8">
                    <div class="flex gap-5">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-red-600 bg-red-100 rounded-full">
                            <i class="ri-lg ri-error-warning-line"></i>
                        </div>
                        <div>
                            <h3 class="mb-2 text-xl font-semibold text-gray-800">Manuel Planlama ve Takip</h3>
                            <p class="text-lg text-gray-600">Üretim planlaması, stok takibi ve kaynak yönetiminin manuel
                                olarak yapılması, insan hatalarına açık bir ortam yaratır ve zaman kaybına neden olur.
                                Çalışanların veri girişi ve raporlama için harcadığı zaman, katma değerli faaliyetlerden
                                çalınmaktadır.</p>
                        </div>
                    </div>
                    <div class="flex gap-5">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-orange-600 bg-orange-100 rounded-full">
                            <i class="ri-lg ri-time-line"></i>
                        </div>
                        <div>
                            <h3 class="mb-2 text-xl font-semibold text-gray-800">Uzun Teslim Süreleri</h3>
                            <p class="text-lg text-gray-600">Entegre olmayan sistemler ve manuel süreçler, siparişten
                                teslimata kadar geçen süreyi uzatır. Müşteri memnuniyetini olumsuz etkileyen bu durum,
                                rekabet gücünüzü zayıflatır ve pazar payınızı kaybetme riskini artırır.</p>
                        </div>
                    </div>
                    <div class="flex gap-5">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-yellow-600 bg-yellow-100 rounded-full">
                            <i class="ri-lg ri-recycle-line"></i>
                        </div>
                        <div>
                            <h3 class="mb-2 text-xl font-semibold text-gray-800">Yüksek Fire Oranları</h3>
                            <p class="text-lg text-gray-600">Yetersiz kalite kontrol ve izlenebilirlik, üretim
                                süreçlerinde yüksek fire oranlarına yol açar. Bu durum hammadde israfını artırır,
                                maliyetleri yükseltir ve sürdürülebilirlik hedeflerinize ulaşmanızı engeller.</p>
                        </div>
                    </div>
                    <div class="flex gap-5">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-purple-600 bg-purple-100 rounded-full">
                            <i class="ri-lg ri-database-2-line"></i>
                        </div>
                        <div>
                            <h3 class="mb-2 text-xl font-semibold text-gray-800">Veri Entegrasyonu Eksikliği</h3>
                            <p class="text-lg text-gray-600">Farklı departmanlar arasında veri paylaşımının yetersiz
                                olması, karar verme süreçlerini yavaşlatır ve stratejik planlama yapılmasını
                                zorlaştırır. Gerçek zamanlı veri eksikliği, proaktif yönetim yerine reaktif yaklaşımlara
                                neden olur.</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 place-content-center">
                    <div class="p-6 text-center bg-white rounded-lg shadow-sm">
                        <h4 class="mb-4 text-lg font-medium text-gray-800">Fire Oranı</h4>
                        <div class="relative w-48 h-48 mx-auto">
                            <svg class="progress-ring" width="160" height="160">
                                <circle class="progress-ring__circle" stroke="#e5e7eb" stroke-width="12"
                                    fill="transparent" r="70" cx="80" cy="80" />
                                <circle class="progress-ring__circle" stroke="#ef4444" stroke-width="12"
                                    stroke-dasharray="439.8" stroke-dashoffset="109.95" fill="transparent" r="70"
                                    cx="80" cy="80" />
                            </svg>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="text-3xl font-bold text-gray-800">25%</span>
                            </div>
                        </div>
                        <p class="mt-4 text-lg text-gray-600">Manuel süreçlerde ortalama fire oranı</p>
                    </div>
                    <div class="p-6 text-center bg-white rounded-lg shadow-sm">
                        <h4 class="mb-4 text-lg font-medium text-gray-800">Teslim Süresi</h4>
                        <div class="relative w-48 h-48 mx-auto">
                            <svg class="progress-ring" width="160" height="160">
                                <circle class="progress-ring__circle" stroke="#e5e7eb" stroke-width="12"
                                    fill="transparent" r="70" cx="80" cy="80" />
                                <circle class="progress-ring__circle" stroke="#f59e0b" stroke-width="12"
                                    stroke-dasharray="439.8" stroke-dashoffset="175.92" fill="transparent" r="70"
                                    cx="80" cy="80" />
                            </svg>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="text-3xl font-bold text-gray-800">40%</span>
                            </div>
                        </div>
                        <p class="mt-4 text-lg text-gray-600">Uzayan teslim süresi oranı</p>
                    </div>
                    <div class="p-6 text-center bg-white rounded-lg shadow-sm">
                        <h4 class="mb-4 text-lg font-medium text-gray-800">Verimlilik Kaybı</h4>
                        <div class="relative w-48 h-48 mx-auto">
                            <svg class="progress-ring" width="160" height="160">
                                <circle class="progress-ring__circle" stroke="#e5e7eb" stroke-width="12"
                                    fill="transparent" r="70" cx="80" cy="80" />
                                <circle class="progress-ring__circle" stroke="#8b5cf6" stroke-width="12"
                                    stroke-dasharray="439.8" stroke-dashoffset="131.94" fill="transparent" r="70"
                                    cx="80" cy="80" />
                            </svg>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="text-3xl font-bold text-gray-800">30%</span>
                            </div>
                        </div>
                        <p class="mt-4 text-lg text-gray-600">Verimsiz süreçlerden kaynaklanan kayıp</p>
                    </div>
                    <div class="p-6 text-center bg-white rounded-lg shadow-sm">
                        <h4 class="mb-4 text-lg font-medium text-gray-800">Maliyet Artışı</h4>
                        <div class="relative w-48 h-48 mx-auto">
                            <svg class="progress-ring" width="160" height="160">
                                <circle class="progress-ring__circle" stroke="#e5e7eb" stroke-width="12"
                                    fill="transparent" r="70" cx="80" cy="80" />
                                <circle class="progress-ring__circle" stroke="#10b981" stroke-width="12"
                                    stroke-dasharray="439.8" stroke-dashoffset="153.93" fill="transparent" r="70"
                                    cx="80" cy="80" />
                            </svg>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="text-3xl font-bold text-gray-800">35%</span>
                            </div>
                        </div>
                        <p class="mt-4 text-lg text-gray-600">Operasyonel maliyetlerde artış</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="compare" class="py-16 bg-white">
        <div class="container px-4 mx-auto">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-gray-900 md:text-4xl">Manuel Süreçler vs Korgün ERP
                    Karşılaştırması</h2>
                <p class="max-w-3xl mx-auto text-lg text-gray-600">Korgün ERP'nin manuel süreçlere kıyasla sağladığı
                    performans avantajları.</p>
            </div>
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
                <div class="p-6 bg-white rounded-lg shadow-sm">
                    <h3 class="mb-6 text-2xl font-semibold text-center text-gray-800">Üretim Verimliliği Karşılaştırması
                    </h3>
                    <div id="barChart" class="w-full h-96"></div>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-sm">
                    <h3 class="mb-6 text-2xl font-semibold text-center text-gray-800">Teslim Süreleri ve Verimlilik
                        Oranları</h3>
                    <div id="lineChart" class="w-full h-96"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="benefits" class="py-16 bg-gray-50">
        <div class="container px-4 mx-auto">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-gray-900 md:text-4xl">Manuel Süreçler vs Korgün ERP</h2>
                <p class="max-w-3xl mx-auto text-lg text-gray-600">Detaylı karşılaştırma ile Korgün ERP'nin sunduğu
                    faydaları keşfedin.</p>
            </div>
            <div class="w-full overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm bg-white rounded-lg shadow-sm table-auto break-words md:text-base">
                        <thead>
                            <tr class="bg-gray-100">
                                <th scope="col"
                                    class="px-2 py-3 text-sm font-semibold text-left text-gray-700 md:text-base">Özellik
                                </th>
                                <th scope="col"
                                    class="px-2 py-3 text-sm font-semibold text-left text-gray-700 md:text-base">Manuel
                                    Süreçler</th>
                                <th scope="col"
                                    class="px-2 py-3 text-sm font-semibold text-left text-primary md:text-base">KORGÜN
                                    ERP</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="px-2 py-3 font-medium text-gray-800">Veri Girişi</td>
                                <td class="px-2 py-3 text-gray-600">Manuel, hata riski yüksek, zaman alıcı</td>
                                <td class="px-2 py-3 text-gray-800">Otomatik, barkod/RFID entegrasyonu, hatasız</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-2 py-3 font-medium text-gray-800">Stok Takibi</td>
                                <td class="px-2 py-3 text-gray-600">Periyodik sayım, gecikmeli veri</td>
                                <td class="px-2 py-3 text-gray-800">Gerçek zamanlı, lokasyon bazlı, otomatik uyarı
                                    sistemi</td>
                            </tr>
                            <tr>
                                <td class="px-2 py-3 font-medium text-gray-800">Üretim Planlaması</td>
                                <td class="px-2 py-3 text-gray-600">Excel tabanlı, sınırlı optimizasyon</td>
                                <td class="px-2 py-3 text-gray-800">Algoritmik planlama, kapasite optimizasyonu,
                                    simülasyon</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-2 py-3 font-medium text-gray-800">Kalite Kontrol</td>
                                <td class="px-2 py-3 text-gray-600">Örnekleme bazlı, gecikmeli raporlama</td>
                                <td class="px-2 py-3 text-gray-800">Entegre kalite modülü, istatistiksel proses kontrolü
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2 py-3 font-medium text-gray-800">Maliyet Analizi</td>
                                <td class="px-2 py-3 text-gray-600">Genel hesaplamalar, düşük hassasiyet</td>
                                <td class="px-2 py-3 text-gray-800">Ürün bazlı detaylı maliyet analizi, senaryo
                                    planlaması</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-2 py-3 font-medium text-gray-800">İzlenebilirlik</td>
                                <td class="px-2 py-3 text-gray-600">Sınırlı, kağıt bazlı takip</td>
                                <td class="px-2 py-3 text-gray-800">Tam izlenebilirlik, parti/lot takibi, geriye dönük
                                    sorgulama</td>
                            </tr>
                            <tr>
                                <td class="px-2 py-3 font-medium text-gray-800">Raporlama</td>
                                <td class="px-2 py-3 text-gray-600">Manuel hazırlanan, statik raporlar</td>
                                <td class="px-2 py-3 text-gray-800">Dinamik dashboard, özelleştirilebilir KPI'lar, anlık
                                    raporlar</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-2 py-3 font-medium text-gray-800">Entegrasyon</td>
                                <td class="px-2 py-3 text-gray-600">Sistemler arası kopukluk, veri aktarım sorunları
                                </td>
                                <td class="px-2 py-3 text-gray-800">Tam entegrasyon, IoT uyumlu, API desteği</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section id="gains" class="py-16 bg-white">
        <div class="container px-4 mx-auto">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-gray-900 md:text-4xl">Verimsiz Süreçlere Son Verin</h2>
                <p class="max-w-3xl mx-auto text-lg text-gray-600">Korgün ERP, üretimdeki karmaşıklığı ortadan
                    kaldırarak size zaman, maliyet ve rekabet avantajı kazandırır.</p>
            </div>
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div
                    class="p-6 transition-shadow border border-gray-100 rounded-lg shadow-sm bg-gray-50 group hover:shadow-md">
                    <div
                        class="flex items-center justify-center w-14 h-14 mb-5 text-primary transition-colors rounded-full bg-blue-100 group-hover:bg-primary group-hover:text-white">
                        <i class="ri-xl ri-line-chart-line"></i>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-gray-800">Verimlilik Artışı</h3>
                    <p class="text-lg text-gray-600">Üretim süreçlerinin optimizasyonu ile %30'a varan verimlilik artışı
                        sağlayarak, aynı kaynakla daha fazla üretim yapabilirsiniz.</p>
                </div>
                <div
                    class="p-6 transition-shadow border border-gray-100 rounded-lg shadow-sm bg-gray-50 group hover:shadow-md">
                    <div
                        class="flex items-center justify-center w-14 h-14 mb-5 text-green-600 transition-colors rounded-full bg-green-100 group-hover:bg-green-600 group-hover:text-white">
                        <i class="ri-xl ri-money-dollar-circle-line"></i>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-gray-800">Maliyet Tasarrufu</h3>
                    <p class="text-lg text-gray-600">Fire oranlarının azaltılması, stok optimizasyonu ve kaynak
                        planlaması ile operasyonel maliyetlerde %25'e varan tasarruf elde edebilirsiniz.</p>
                </div>
                <div
                    class="p-6 transition-shadow border border-gray-100 rounded-lg shadow-sm bg-gray-50 group hover:shadow-md">
                    <div
                        class="flex items-center justify-center w-14 h-14 mb-5 text-purple-600 transition-colors rounded-full bg-purple-100 group-hover:bg-purple-600 group-hover:text-white">
                        <i class="ri-xl ri-customer-service-2-line"></i>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-gray-800">Müşteri Memnuniyeti</h3>
                    <p class="text-lg text-gray-600">Teslim sürelerinin kısalması, kalite tutarlılığının artması ve özel
                        müşteri taleplerine hızlı yanıt verebilme kabiliyeti ile müşteri memnuniyetini artırabilirsiniz.
                    </p>
                </div>
                <div
                    class="p-6 transition-shadow border border-gray-100 rounded-lg shadow-sm bg-gray-50 group hover:shadow-md">
                    <div
                        class="flex items-center justify-center w-14 h-14 mb-5 text-orange-600 transition-colors rounded-full bg-orange-100 group-hover:bg-orange-600 group-hover:text-white">
                        <i class="ri-xl ri-eye-line"></i>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-gray-800">Şeffaflık ve İzlenebilirlik</h3>
                    <p class="text-lg text-gray-600">Hammaddeden nihai ürüne kadar tüm üretim süreçlerini izleyebilir,
                        kalite problemlerinin kaynağını hızla tespit edebilir ve iyileştirme alanlarını
                        belirleyebilirsiniz.</p>
                </div>
                <div
                    class="p-6 transition-shadow border border-gray-100 rounded-lg shadow-sm bg-gray-50 group hover:shadow-md">
                    <div
                        class="flex items-center justify-center w-14 h-14 mb-5 text-red-600 transition-colors rounded-full bg-red-100 group-hover:bg-red-600 group-hover:text-white">
                        <i class="ri-xl ri-time-line"></i>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-gray-800">Hızlı Karar Alma</h3>
                    <p class="text-lg text-gray-600">Gerçek zamanlı veri ve analitik raporlar sayesinde, stratejik ve
                        operasyonel kararları daha hızlı ve doğru bir şekilde alabilirsiniz.</p>
                </div>
                <div
                    class="p-6 transition-shadow border border-gray-100 rounded-lg shadow-sm bg-gray-50 group hover:shadow-md">
                    <div
                        class="flex items-center justify-center w-14 h-14 mb-5 text-yellow-600 transition-colors rounded-full bg-yellow-100 group-hover:bg-yellow-600 group-hover:text-white">
                        <i class="ri-xl ri-scales-3-line"></i>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-gray-800">Uyum ve Standartlar</h3>
                    <p class="text-lg text-gray-600">ISO, HACCP, GMP gibi kalite ve endüstri standartlarına uyum
                        süreçlerini otomatize ederek, denetim hazırlıklarını kolaylaştırabilir ve uyumsuzluk risklerini
                        azaltabilirsiniz.</p>
                </div>
            </div>
        </div>
    </section>
    <script id=chartScript>
        document.addEventListener("DOMContentLoaded", function () {
            const barChart = echarts.init(document.getElementById("barChart"));
            const barOption = {
                animation: false,
                tooltip: {
                    trigger: "axis",
                    axisPointer: {
                        type: "shadow",
                    },
                    backgroundColor: "rgba(255, 255, 255, 0.9)",
                    textStyle: {
                        color: "#1f2937",
                    },
                },
                legend: {
                    data: ["Manuel Süreçler", "Korgün ERP"],
                    textStyle: {
                        color: "#1f2937",
                    },
                },
                grid: {
                    left: "3%",
                    right: "4%",
                    bottom: "3%",
                    containLabel: true,
                },
                xAxis: {
                    type: "category",
                    data: [
                        "Üretim Verimliliği",
                        "Stok Doğruluğu",
                        "Teslim Süresi",
                        "Fire Oranı",
                        "Planlama Doğruluğu",
                    ],
                    axisLine: {
                        lineStyle: {
                            color: "#d1d5db",
                        },
                    },
                    axisLabel: {
                        color: "#1f2937",
                    },
                },
                yAxis: {
                    type: "value",
                    name: "Performans (%)",
                    nameTextStyle: {
                        color: "#1f2937",
                    },
                    axisLine: {
                        lineStyle: {
                            color: "#d1d5db",
                        },
                    },
                    axisLabel: {
                        color: "#1f2937",
                    },
                },
                series: [{
                    name: "Manuel Süreçler",
                    type: "bar",
                    data: [65, 70, 55, 75, 60],
                    itemStyle: {
                        color: "rgba(252, 141, 98, 1)",
                        borderRadius: [4, 4, 0, 0],
                    },
                }, {
                    name: "Korgün ERP",
                    type: "bar",
                    data: [95, 98, 90, 35, 95],
                    itemStyle: {
                        color: "rgba(87, 181, 231, 1)",
                        borderRadius: [4, 4, 0, 0],
                    },
                },],
            };
            barChart.setOption(barOption);
            const lineChart = echarts.init(document.getElementById("lineChart"));
            const lineOption = {
                animation: false,
                tooltip: {
                    trigger: "axis",
                    backgroundColor: "rgba(255, 255, 255, 0.9)",
                    textStyle: {
                        color: "#1f2937",
                    },
                },
                legend: {
                    data: ["Teslim Süresi (Gün)", "Verimlilik (%)"],
                    textStyle: {
                        color: "#1f2937",
                    },
                },
                grid: {
                    left: "3%",
                    right: "4%",
                    bottom: "3%",
                    containLabel: true,
                },
                xAxis: {
                    type: "category",
                    boundaryGap: false,
                    data: [
                        "Manuel Süreç",
                        "Kısmen Otomatik",
                        "ERP Kurulum",
                        "ERP Adaptasyon",
                        "ERP Tam Entegrasyon",
                    ],
                    axisLine: {
                        lineStyle: {
                            color: "#d1d5db",
                        },
                    },
                    axisLabel: {
                        color: "#1f2937",
                    },
                },
                yAxis: [{
                    type: "value",
                    name: "Teslim Süresi (Gün)",
                    position: "left",
                    axisLine: {
                        lineStyle: {
                            color: "#d1d5db",
                        },
                    },
                    axisLabel: {
                        color: "#1f2937",
                        formatter: "{value}",
                    },
                }, {
                    type: "value",
                    name: "Verimlilik (%)",
                    position: "right",
                    axisLine: {
                        lineStyle: {
                            color: "#d1d5db",
                        },
                    },
                    axisLabel: {
                        color: "#1f2937",
                        formatter: "{value}%",
                    },
                },],
                series: [{
                    name: "Teslim Süresi (Gün)",
                    type: "line",
                    yAxisIndex: 0,
                    data: [28, 22, 18, 12, 8],
                    smooth: true,
                    lineStyle: {
                        width: 3,
                        color: "rgba(87, 181, 231, 1)",
                    },
                    itemStyle: {
                        color: "rgba(87, 181, 231, 1)",
                    },
                    showSymbol: false,
                    areaStyle: {
                        color: {
                            type: "linear",
                            x: 0,
                            y: 0,
                            x2: 0,
                            y2: 1,
                            colorStops: [{
                                offset: 0,
                                color: "rgba(87, 181, 231, 0.2)",
                            }, {
                                offset: 1,
                                color: "rgba(87, 181, 231, 0.01)",
                            },],
                        },
                    },
                }, {
                    name: "Verimlilik (%)",
                    type: "line",
                    yAxisIndex: 1,
                    data: [65, 72, 78, 85, 95],
                    smooth: true,
                    lineStyle: {
                        width: 3,
                        color: "rgba(141, 211, 199, 1)",
                    },
                    itemStyle: {
                        color: "rgba(141, 211, 199, 1)",
                    },
                    showSymbol: false,
                    areaStyle: {
                        color: {
                            type: "linear",
                            x: 0,
                            y: 0,
                            x2: 0,
                            y2: 1,
                            colorStops: [{
                                offset: 0,
                                color: "rgba(141, 211, 199, 0.2)",
                            }, {
                                offset: 1,
                                color: "rgba(141, 211, 199, 0.01)",
                            },],
                        },
                    },
                },],
            };
            lineChart.setOption(lineOption);
            window.addEventListener("resize", function () {
                barChart.resize();
                lineChart.resize();
            });
        });
    </script>
    <script id=chartInitialization>
        document.addEventListener('DOMContentLoaded', function () {
            const productionChart = echarts.init(document.getElementById('productionChart'));
            const productionOption = {
                animation: false,
                title: {
                    text: 'Aylık Üretim Performansı',
                    left: 'center',
                    textStyle: {
                        color: '#1f2937'
                    }
                },
                tooltip: {
                    trigger: 'axis',
                    backgroundColor: 'rgba(255, 255, 255, 0.8)',
                    textStyle: {
                        color: '#1f2937'
                    }
                },
                legend: {
                    data: ['Planlanan', 'Gerçekleşen'],
                    bottom: 0,
                    textStyle: {
                        color: '#1f2937'
                    }
                },
                grid: {
                    left: '3%',
                    right: '4%',
                    bottom: '15%',
                    top: '15%',
                    containLabel: true
                },
                xAxis: {
                    type: 'category',
                    data: ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran'],
                    axisLine: {
                        lineStyle: {
                            color: '#1f2937'
                        }
                    }
                },
                yAxis: {
                    type: 'value',
                    name: 'Üretim Adedi',
                    axisLine: {
                        lineStyle: {
                            color: '#1f2937'
                        }
                    }
                },
                series: [{
                    name: 'Planlanan',
                    type: 'line',
                    smooth: true,
                    data: [1200, 1350, 1400, 1500, 1600, 1750],
                    lineStyle: {
                        color: 'rgba(87, 181, 231, 1)'
                    },
                    itemStyle: {
                        color: 'rgba(87, 181, 231, 1)'
                    },
                    areaStyle: {
                        color: {
                            type: 'linear',
                            x: 0,
                            y: 0,
                            x2: 0,
                            y2: 1,
                            colorStops: [{
                                offset: 0,
                                color: 'rgba(87, 181, 231, 0.3)'
                            }, {
                                offset: 1,
                                color: 'rgba(87, 181, 231, 0.1)'
                            }]
                        }
                    },
                    showSymbol: false
                }, {
                    name: 'Gerçekleşen',
                    type: 'line',
                    smooth: true,
                    data: [1150, 1320, 1450, 1520, 1650, 1800],
                    lineStyle: {
                        color: 'rgba(141, 211, 199, 1)'
                    },
                    itemStyle: {
                        color: 'rgba(141, 211, 199, 1)'
                    },
                    areaStyle: {
                        color: {
                            type: 'linear',
                            x: 0,
                            y: 0,
                            x2: 0,
                            y2: 1,
                            colorStops: [{
                                offset: 0,
                                color: 'rgba(141, 211, 199, 0.3)'
                            }, {
                                offset: 1,
                                color: 'rgba(141, 211, 199, 0.1)'
                            }]
                        }
                    },
                    showSymbol: false
                }]
            };
            productionChart.setOption(productionOption);
            const efficiencyChart = echarts.init(document.getElementById('efficiencyChart'));
            const efficiencyOption = {
                animation: false,
                title: {
                    text: 'Verimlilik Analizi',
                    left: 'center',
                    textStyle: {
                        color: '#1f2937'
                    }
                },
                tooltip: {
                    trigger: 'item',
                    backgroundColor: 'rgba(255, 255, 255, 0.8)',
                    textStyle: {
                        color: '#1f2937'
                    }
                },
                legend: {
                    orient: 'horizontal',
                    bottom: 0,
                    textStyle: {
                        color: '#1f2937'
                    }
                },
                series: [{
                    name: 'Verimlilik Analizi',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    itemStyle: {
                        borderRadius: 10,
                        borderColor: '#fff',
                        borderWidth: 2
                    },
                    label: {
                        show: false,
                        position: 'center'
                    },
                    emphasis: {
                        label: {
                            show: true,
                            fontSize: 16,
                            fontWeight: 'bold'
                        }
                    },
                    labelLine: {
                        show: false
                    },
                    data: [{
                        value: 75,
                        name: 'Üretim Süresi',
                        itemStyle: {
                            color: 'rgba(87, 181, 231, 1)'
                        }
                    }, {
                        value: 12,
                        name: 'Hazırlık',
                        itemStyle: {
                            color: 'rgba(141, 211, 199, 1)'
                        }
                    }, {
                        value: 8,
                        name: 'Bakım',
                        itemStyle: {
                            color: 'rgba(251, 191, 114, 1)'
                        }
                    }, {
                        value: 5,
                        name: 'Duruş',
                        itemStyle: {
                            color: 'rgba(252, 141, 98, 1)'
                        }
                    }]
                }]
            };
            efficiencyChart.setOption(efficiencyOption);
            window.addEventListener('resize', function () {
                productionChart.resize();
                efficiencyChart.resize();
            });
        });
    </script>
    <?php
    require_once __DIR__ . '/../templates/footer.php';
    ?>