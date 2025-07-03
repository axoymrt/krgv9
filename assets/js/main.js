// Bu dosya, sitenin tüm JavaScript mantığını tek bir yerde birleştirir.
// Tüm kod, tek bir "DOMContentLoaded" olayı içinde çalışır.
document.addEventListener("DOMContentLoaded", function () {

    // =================================================================
    // ADIM 1: TÜM HTML ELEMANLARI EN BAŞTA SEÇİLİR
    // Bu, "is not defined" hatasını önler, çünkü tüm değişkenler
    // kullanılmadan önce hazır hale getirilir.
    // =================================================================
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");
    const contactBtn = document.getElementById("contactBtn");
    const contactPopup = document.getElementById("contactPopup");
    const closePopupBtn = document.getElementById("closePopupBtn");
    const cookieBanner = document.getElementById('cookie-banner');
    const acceptBtn = document.getElementById('accept-cookies-btn');
    const demoPopup = document.getElementById("demoPopup");
    const mobileMenuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");
    // Diğer elemanlarınız da buraya eklenebilir.


    // =================================================================
    // ADIM 2: FONKSİYONLAR VE OLAY DİNLEYİCİLERİ TANIMLANIR
    // Bu bölümdeki tüm kodlar, ADIM 1'de tanımlanan değişkenlere
    // sorunsuzca erişebilir.
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
        const closeDemoPopup = demoPopup.querySelector("#closePopup");
        const storageKey = "popupClosedTimestamp";
        const reappearAfterMinutes = 15;
        const reappearDelay = reappearAfterMinutes * 60 * 1000;
        const showPopup = () => {
            setTimeout(() => {
                demoPopup.classList.remove("hidden");
                if (closeDemoPopup) setTimeout(() => { closeDemoPopup.classList.remove("hidden"); }, 3000);
            }, 5000);
        };
        if (closeDemoPopup) {
            closeDemoPopup.addEventListener("click", () => {
                demoPopup.classList.add("hidden");
                localStorage.setItem(storageKey, new Date().getTime());
            });
        }
        const lastClosedTime = localStorage.getItem(storageKey);
        if (!lastClosedTime || (new Date().getTime() - parseInt(lastClosedTime, 10)) > reappearDelay) {
            showPopup();
        }
    }

    // --- Mobil Menü ---
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener("click", function () {
            mobileMenu.classList.toggle("hidden");
            const icon = mobileMenuButton.querySelector("i");
            if (icon) {
                icon.classList.toggle("ri-menu-line");
                icon.classList.toggle("ri-close-line");
            }
        });
        mobileMenu.querySelectorAll("a").forEach(link => {
            link.addEventListener("click", () => {
                mobileMenu.classList.add("hidden");
                const icon = mobileMenuButton.querySelector("i");
                if (icon) {
                    icon.classList.add("ri-menu-line");
                    icon.classList.remove("ri-close-line");
                }
            });
        });
    }
    
    // ... Diğer tüm fonksiyonlarınız (sayı sayacı, pürüzsüz kaydırma, sekmeler, video modal vb.) buraya eklenebilir.
    // Bu yapı içinde hepsi sorunsuz çalışacaktır.
});

    // =================================================================
    // BÖLÜM X: ECHARTS GRAFİK YÖNETİMİ
    // =================================================================
    const advantagesChartElement = document.getElementById('advantagesChart');
    if (advantagesChartElement) {
        try {
            const chart = echarts.init(advantagesChartElement);
            const option = {
                tooltip: {
                    trigger: 'axis',
                    backgroundColor: 'rgba(255, 255, 255, 0.9)',
                    borderColor: '#e5e7eb',
                    borderWidth: 1,
                    textStyle: { color: '#1f2937' },
                    formatter: function (params) {
                        const axisLabels = ['Verimlilik', 'Maliyet', 'Fire Oranı', 'Teslimat', 'Kalite', 'Müşteri Memnuniyeti'];
                        let tooltipHtml = `${axisLabels[params[0].dataIndex]}<br/>`;
                        params.forEach(param => {
                            tooltipHtml += `<span style="display:inline-block;margin-right:5px;border-radius:10px;width:10px;height:10px;background-color:${param.color};"></span>`;
                            tooltipHtml += `${param.seriesName}: <strong>${param.value}%</strong><br/>`;
                        });
                        return tooltipHtml;
                    }
                },
                legend: {
                    data: ['ERP Öncesi', 'ERP Sonrası'],
                    textStyle: { color: '#4b5563' }
                },
                grid: { top: '15%', right: '5%', bottom: '5%', left: '12%' },
                xAxis: {
                    type: 'category',
                    data: ['Verimlilik', 'Maliyet', 'Fire Oranı', 'Teslimat', 'Kalite', 'Müşteri Memnuniyeti'],
                    show: false
                },
                yAxis: {
                    type: 'value',
                    name: 'Performans Skoru',
                    nameTextStyle: { color: '#374151', padding: [0, 0, 0, 40] },
                    axisLine: { show: true, lineStyle: { color: '#d1d5db' } },
                    axisLabel: { color: '#374151', formatter: '{value} %' },
                    splitLine: { lineStyle: { color: '#e5e7eb' } }
                },
                series: [{
                    name: 'ERP Öncesi',
                    type: 'bar',
                    data: [20, 15, 35, 25, 30, 35],
                    itemStyle: { color: '#d1d5db', borderRadius: [4, 4, 0, 0] }, // Gri ton
                    barGap: '20%',
                    barMaxWidth: 30
                }, {
                    name: 'ERP Sonrası',
                    type: 'bar',
                    data: [45, 30, 10, 55, 60, 75],
                    itemStyle: { color: '#ED1C24', borderRadius: [4, 4, 0, 0] }, // Ana renk
                    barMaxWidth: 30
                }]
            };
            chart.setOption(option);
            window.addEventListener('resize', function () {
                chart.resize();
            });
        } catch (e) {
            // echarts kütüphanesi yüklenmemişse veya bir hata olursa konsola yazdır
            console.error("ECharts grafiği oluşturulurken bir hata oluştu:", e);
        }
    }

}); // <-- BU, main.js dosyanızın en sonundaki kapanış parantezi olmalı