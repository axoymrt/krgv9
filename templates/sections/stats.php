<?php
$statsData = [
    [
        'icon' => 'ri-calendar-check-line',
        'number' => '33+',
        'label' => 'Yıllık Tecrübe'
    ],
    [
        'icon' => 'ri-team-line',
        'number' => '16000+',
        'label' => 'Mutlu Müşteri'
    ],
    [
        'icon' => 'ri-line-chart-line',
        'number' => '98%',
        'label' => 'Proje Başarı Oranı'
    ],
    [
        'icon' => 'ri-building-4-line',
        'number' => '26+',
        'label' => 'Farklı Sektör'
    ]
];
?>
<section id="stats" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Rakamlarla Korgün ERP</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">30 yılı aşkın tecrübemizle, yüzlerce işletmenin dijital dönüşüm yolculuğuna liderlik ediyoruz.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <?php
            foreach ($statsData as $stat) {
                render_stat_card($stat['icon'], $stat['number'], $stat['label']);
            }
            ?>
        </div>
    </div>
</section>