<nav class="sticky top-20 z-40 bg-gray-50/95 backdrop-blur-sm border-b shadow-sm">
    <div class="container mx-auto px-4">
        <div class="relative flex items-center justify-between space-x-4">

            <div id="page-nav-container" class="flex-grow flex justify-start overflow-x-auto space-x-6 py-3 scrollbar-none whitespace-nowrap">
                <a href="#future-control" class="nav-link">3 Adımda</a><span class="nav-separator">|</span>
                <a href="#support-journey" class="nav-link">Proje Metodu</a><span class="nav-separator">|</span>
                <a href="#comparison" class="nav-link">Karşılaştırma</a><span class="nav-separator">|</span>
                <a href="<?= BASE_URL ?>/page/analiz.php" class="nav-link">Analiz</a><span class="nav-separator">|</span>
                <a href="<?= BASE_URL ?>/page/sirketprofili.php" class="nav-link">Şirket Profili</a>
            </div>

            <div class="flex-shrink-0">
                <button @click="searchModalOpen = true; $nextTick(() => { $refs.modalSearchInput.focus() })"
                    class="flex items-center space-x-2 text-lg text-gray-700 hover:text-primary font-medium transition-colors px-3 rounded-lg">
                    <i class="fa-solid fa-search"></i>
                    <span class="hidden sm:inline">Ara</span>
                </button>
            </div>
        </div>
    </div>
</nav>