<nav class="sticky top-20 z-40 bg-gray-50 border-b shadow-sm">
    <div class="container mx-auto px-4">
        <div class="relative flex items-center">
            <div id="sticky-nav-container" class="flex items-center overflow-x-auto space-x-6 py-3 scrollbar-none whitespace-nowrap" style="-webkit-overflow-scrolling: touch;">

                <?php
                $currentPageName = isset($breadcrumbTitle) ? strtoupper($breadcrumbTitle) : 'MEVCUT SAYFA';
                $currentPageId = isset($pageId) ? $pageId : '';
                global $stickyNavItems;
                ?>
                <a href="#top" class="relative text-lg text-gray-700 hover:text-primary font-medium transition-colors after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-primary after:transition-all after:duration-300 hover:after:w-full cursor-pointer">
                    Buradasınız > <?= htmlspecialchars($currentPageName) ?>
                </a>

                <?php
                foreach ($stickyNavItems as $id => $item):
                    if ($id !== $currentPageId):
                ?>
                        <span class="text-lg text-gray-300">|</span>
                        <a href="<?= BASE_URL . htmlspecialchars($item['url']) ?>" class="relative text-lg text-gray-700 hover:text-primary font-medium transition-colors after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-primary after:transition-all after:duration-300 hover:after:w-full cursor-pointer">
                            <?= htmlspecialchars($item['title']) ?>
                        </a>
                <?php
                    endif;
                endforeach;
                ?>

            </div>
            <button id="scroll-left" class="hidden absolute -left-8 top-1/2 -translate-y-1/2 bg-white/80 backdrop-blur-sm p-1 rounded-full shadow-lg border border-gray-200/50 hover:bg-white focus:outline-none transition-all duration-300">
                <svg class="w-5 h-5 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </button>
            <button id="scroll-right" class="hidden absolute -right-8 top-1/2 -translate-y-1/2 bg-white/80 backdrop-blur-sm p-1 rounded-full shadow-lg border border-gray-200/50 hover:bg-white focus:outline-none transition-all duration-300">
                <svg class="w-5 h-5 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>

        </div>
    </div>
</nav>