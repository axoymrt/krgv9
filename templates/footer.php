<?php
// Bu değişkenler en başta kalabilir, sorun yok.
$contactInfo = ['phone_display' => '+90 530 353 22 02', 'phone_link' => 'tel:+905303532202', 'email' => 'korgun@korgun.com.tr', 'support_url' => 'http://www.korgundestek.com', 'map_url' => 'https://maps.app.goo.gl/SevCdrPBkfovEF746'];
$socialLinks = [['name' => 'Facebook', 'url' => 'http://www.facebook.com/www.korgun.com.tr/', 'icon_class' => 'ri-facebook-fill'], ['name' => 'Twitter', 'url' => 'http://www.twitter.com/korgunyazilim/', 'icon_class' => 'ri-twitter-x-fill'], ['name' => 'LinkedIn', 'url' => 'https://www.linkedin.com/company/korgunyazilim', 'icon_class' => 'ri-linkedin-fill'], ['name' => 'Instagram', 'url' => 'https://www.instagram.com/korgun.yazilim/', 'icon_class' => 'ri-instagram-fill'], ['name' => 'YouTube', 'url' => 'https://www.youtube.com/KorgunTr1992', 'icon_class' => 'ri-youtube-fill']];
if (!defined('DEMO_URL')) define('DEMO_URL', 'https://www.korgun.com.tr/demo');
if (!defined('BASE_URL')) define('BASE_URL', 'https://www.korgun.com.tr');
?>

<!-- === TÜM HTML ELEMANLARI === -->
<button
	class="flex items-center justify-center rounded-full duration-300 bg-primary bottom-6 fixed h-12 hover:bg-red-700 opacity-0 pointer-events-none shadow-lg text-white w-12 z-50 right-6 transition-all"
	id="scrollToTopBtn" aria-label="Sayfa üstüne dön" title="Sayfa üstüne dön"><i
		class="text-xl ri-arrow-up-line"></i></button>
<button
	class="flex items-center justify-center rounded-full duration-300 text-2xl bg-primary bottom-6 fixed h-12 hover:bg-red-700 left-6 opacity-0 pointer-events-none shadow-lg text-white transition-all w-12 z-50"
	id="contactBtn" aria-label="İletişim bilgilerini göster"><i class="ri-phone-line"></i></button>

<div id="contactPopup"
	class="fixed bottom-24 left-6 z-50 bg-white rounded-lg shadow-2xl p-6 w-72 max-w-xs border border-gray-200 hidden flex-col transition-all duration-300">
	<!-- ... contact popup içeriği ... -->
    <button id="closePopupBtn" aria-label="Kapat" class="absolute top-2 right-6 text-gray-500 hover:text-gray-800 text-2xl">×</button>
	<div class="mb-4">
		<h3 class="text-lg font-semibold mb-3">İletişim Bilgileri</h3>
		<p class="text-lg text-gray-700 mb-2"><strong>Telefon:</strong> <a href="<?= htmlspecialchars($contactInfo['phone_link']) ?>" class="text-default hover:underline"><?= htmlspecialchars($contactInfo['phone_display']) ?></a></p>
		<p class="text-lg text-gray-700 mb-2"><strong>E-posta:</strong> <a href="mailto:<?= htmlspecialchars($contactInfo['email']) ?>" class="text-default hover:underline"><?= htmlspecialchars($contactInfo['email']) ?></a></p>
		<p class="text-lg text-gray-700 mb-2"><strong>Destek:</strong> <a href="<?= htmlspecialchars($contactInfo['support_url']) ?>" target="_blank" rel="noopener" class="text-default hover:underline">korgundestek.com</a></p>
		<p class="text-lg text-gray-700 mb-4"><strong>Lokasyon:</strong> <a href="<?= htmlspecialchars($contactInfo['map_url']) ?>" target="_blank" rel="noopener" class="text-default hover:underline">Haritada Aç</a></p>
		<div class="flex space-x-3 mt-4">
			<?php foreach ($socialLinks as $link): ?><a href="<?= htmlspecialchars($link['url']) ?>" target="_blank" rel="noopener" aria-label="<?= htmlspecialchars($link['name']) ?>" class="text-primary bg-gray-100 hover:bg-primary hover:text-white p-3 rounded-full transition duration-300 shadow-sm flex items-center justify-center w-10 h-10 text-xl"><i class="<?= htmlspecialchars($link['icon_class']) ?>"></i></a><?php endforeach; ?>
		</div>
	</div>
</div>

<div id="demoPopup" class="px-4 fixed inset-0 z-[9999] bg-black/50 flex items-center justify-center hidden">
	<!-- ... demo popup içeriği ... -->
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-[500px] p-8 relative animate-bounce-in"><button id="closePopup" class="absolute top-4 right-4 text-gray-400 hover:text-gray-700 text-2xl hidden"><i class="ri-close-line"></i></button>
		<h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 text-center">ERP Çözümlerimizi Deneyimleyin</h3>
		<p class="text-lg text-gray-700 mb-6 text-center">Korgün ERP'nin tüm avantajlarını deneyimlemek için ücretsiz demo talebinde bulunun.</p>
		<div class="flex justify-center mb-6"><a href="<?= DEMO_URL ?>" target="_blank" class="bg-primary text-white px-6 py-3 rounded-button text-lg text-center hover:bg-red-600 transition">Ücretsiz Demo Talebi İsteyin</a></div>
		<p class="text-lg text-center text-gray-700 mb-2">Bilgi almak istiyorsanız formu doldurabilir veya bizi arayabilirsiniz.</p>
		<p class="text-xl text-center text-gray-700"><a href="<?= htmlspecialchars($contactInfo['phone_link']) ?>" class="text-default hover:underline"><?= htmlspecialchars($contactInfo['phone_display']) ?></a></p>
		<hr class="border-gray-300 mt-6">
		<div class="flex justify-center gap-4 text-2xl space-x-3 mt-6"><?php foreach ($socialLinks as $link): ?><a href="<?= htmlspecialchars($link['url']) ?>" target="_blank" rel="noopener" aria-label="<?= htmlspecialchars($link['name']) ?>" class="text-primary bg-gray-100 hover:bg-primary hover:text-white p-3 rounded-full transition duration-300 shadow-sm flex items-center justify-center w-10 h-10 text-2xl"><i class="<?= htmlspecialchars($link['icon_class']) ?>"></i></a><?php endforeach; ?></div>
	</div>
</div>

<div class="bg-slate-50 footer-bottom border-t border-gray-200 py-4 flex flex-col md:flex-row justify-center items-center gap-6">
	<p class="text-sm text-center md:text-left">© <?php echo date('Y'); ?> Korgün Yazılım Danışmanlık ve Bilgisayar. Tüm Hakları Saklıdır.</p>
</div>

<div id="cookie-banner" class="fixed bottom-0 left-0 right-0 z-[9998] bg-gray-800 text-white p-4 md:p-5 transform transition-transform duration-500 ease-in-out translate-y-full shadow-[0_-4px_15px_rgba(0,0,0,0.1)]">
	<div class="container mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
		<p class="text-sm md:text-base text-center md:text-left text-gray-200">Web sitemizdeki kullanıcı deneyiminizi geliştirmek ve yasal yükümlülüklerimizi yerine getirmek için çerezler kullanıyoruz. Detaylı bilgi için <a href="https://www.korgun.com.tr/demo_talep/aydinlatma_metni.html" target="_blank" rel="noopener" class="font-semibold text-blue-400 hover:text-blue-300 underline">Aydınlatma Metni</a>'ni inceleyebilirsiniz.</p>
		<button id="accept-cookies-btn" class="flex-shrink-0 bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-lg transition-colors duration-300">Anladım</button>
	</div>
</div>

<!-- === TÜM SCRIPT ÇAĞRILARI EN SONDA, BU SIRAYLA OLMALI === -->
<script src="https://cdn.jsdelivr.net/npm/echarts@5.5.0/dist/echarts.min.js"></script>
<!-- <script src="<?= BASE_URL ?>/assets/js/main.js"></script> -->

<script>
document.addEventListener("DOMContentLoaded", function () {
    console.log("DOĞRUDAN FOOTER'DAN ÇALIŞAN KOD BAŞLATILDI!");

    // =================================================================
    // ADIM 1: TÜM HTML ELEMANLARI EN BAŞTA SEÇİLİR
    // =================================================================
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");
    const contactBtn = document.getElementById("contactBtn");
    const contactPopup = document.getElementById("contactPopup");
    const closePopupBtn = document.getElementById("closePopupBtn");
    const cookieBanner = document.getElementById('cookie-banner');
    const acceptBtn = document.getElementById('accept-cookies-btn');
    const demoPopup = document.getElementById("demoPopup");
    // Diğer elemanlarınız...

    console.log("scrollToTopBtn bulundu mu?", scrollToTopBtn ? 'EVET' : 'HAYIR');
    console.log("contactBtn bulundu mu?", contactBtn ? 'EVET' : 'HAYIR');

    // =================================================================
    // ADIM 2: FONKSİYONLAR VE OLAY DİNLEYİCİLERİ
    // =================================================================

    // --- Kaydırma (Scroll) Olayı ---
    window.addEventListener("scroll", () => {
        const shouldBeVisible = window.scrollY > 300;
        
        if (scrollTopBtn) {
            scrollTopBtn.classList.toggle('opacity-0', !shouldBeVisible);
            scrollTopBtn.classList.toggle('pointer-events-none', !shouldBeVisible);
        }
        if (contactBtn) {
            contactBtn.classList.toggle('opacity-0', !shouldBeVisible);
            contactBtn.classList.toggle('pointer-events-none', !shouldBeVisible);
            if (!shouldBeVisible && contactPopup) {
                contactPopup.classList.add("hidden");
            }
        }
    });

    // --- Yukarı Çık Butonu Tıklaması ---
    if (scrollToTopBtn) {
        scrollToTopBtn.addEventListener("click", () => {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    }

    // --- İletişim Popup'ı ---
    if (contactBtn && contactPopup) {
        if (closePopupBtn) {
            closePopupBtn.addEventListener("click", () => contactPopup.classList.add("hidden"));
        }
        contactBtn.addEventListener("click", () => contactPopup.classList.toggle("hidden"));
        document.addEventListener("click", (event) => {
            if (!contactPopup.contains(event.target) && !contactBtn.contains(event.target)) {
                contactPopup.classList.add("hidden");
            }
        });
    }

    // --- Cookie Banner Mantığı ---
    if (cookieBanner && acceptBtn) {
        const getCookie = (name) => {
            const nameEQ = name + "=";
            for (let c of document.cookie.split(';')) {
                c = c.trim();
                if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        };
        const setCookie = (name, value, days) => {
            let expires = "";
            if (days) {
                const date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = `${name}=${value || ""}${expires}; path=/; SameSite=Lax`;
        };
        const pushButtonsUp = () => {
            if (scrollTopBtn) scrollTopBtn.classList.replace('bottom-6', 'bottom-24');
            if (contactBtn) contactBtn.classList.replace('bottom-6', 'bottom-24');
        };
        const pushButtonsDown = () => {
            if (scrollTopBtn) scrollTopBtn.classList.replace('bottom-24', 'bottom-6');
            if (contactBtn) contactBtn.classList.replace('bottom-24', 'bottom-6');
        };
        if (!getCookie('korgun_cookie_consent')) {
            setTimeout(() => {
                cookieBanner.classList.remove('translate-y-full');
                pushButtonsUp();
            }, 500);
        }
        acceptBtn.addEventListener('click', () => {
            setCookie('korgun_cookie_consent', 'true', 365);
            cookieBanner.classList.add('translate-y-full');
            pushButtonsDown();
        });
    }

    // --- Demo Popup ---
    if (demoPopup) {
        // ... Demo popup kodunuz burada çalışmaya devam edecek ...
    }
});
</script>

</body>
</html>


</body>
</html>