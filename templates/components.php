<?php
function render_feature_card($icon, $title, $description)
{
    echo <<<HTML
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
        <div class="w-14 h-14 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mb-6">
            <i class="{$icon} text-primary text-2xl"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-900 mb-3">{$title}</h3>
        <p class="text-lg text-gray-600">{$description}</p>
    </div>
    HTML;
}
function render_product_card($icon, $title, $description, $link)
{
    echo <<<HTML
    <div class="feature-card bg-gray-50 p-6 rounded-lg shadow-md transition-all duration-300 flex flex-col justify-between">
        <div>
            <div class="w-16 h-16 flex items-center justify-center bg-red-100 rounded-full mb-6">
                <i class="{$icon} text-2xl text-primary"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-3">{$title}</h3>
            <p class="text-lg text-gray-600 mb-4">{$description}</p>
        </div>
        <a href="{$link}" class="inline-block mt-auto text-primary border border-primary hover:bg-primary hover:text-white transition-colors duration-300 px-4 py-2 rounded-md text-lg font-medium text-center">Detaylı Bilgi Alın</a>
    </div>
    HTML;
}
function render_module_list_item($title, $description)
{
    echo <<<HTML
    <li class="flex items-start">
        <div class="w-6 h-6 flex items-center justify-center rounded-full bg-red-100 mt-1 mr-3 flex-shrink-0">
            <i class="ri-check-line text-primary"></i>
        </div>
        <div>
            <h4 class="text-xl font-semibold text-gray-900">{$title}</h4>
            <p class="text-lg text-gray-600">{$description}</p>
        </div>
    </li>
    HTML;
}
function render_comparison_item($icon, $title, $description, $is_korgun = false)
{
    $icon_color_class = $is_korgun ? 'text-green-500' : 'text-gray-500';
    echo <<<HTML
    <li class="flex items-start">
        <i class="{$icon} text-xl {$icon_color_class} mt-1 mr-3 flex-shrink-0"></i>
        <div>
            <h4 class="text-lg font-semibold text-gray-800">{$title}</h4>
            <p class="text-lg text-gray-600">{$description}</p>
        </div>
    </li>
    HTML;
}
function render_testimonial_card($name, $title, $quote)
{
    echo <<<HTML
    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
        <h3 class="text-lg font-semibold text-default mb-1">{$name}</h3>
        <p class="text-base text-gray-500 mb-4">{$title}</p>
        <p class="text-lg text-gray-700 italic">"{$quote}"</p>
    </div>
    HTML;
}
function render_stat_card($icon, $number, $label)
{
    echo <<<HTML
    <div class="bg-gray-50 p-8 rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300">
        <div class="w-16 h-16 mx-auto flex items-center justify-center bg-red-100 rounded-full mb-4">
            <i class="{$icon} text-3xl text-primary"></i>
        </div>
        <p class="text-5xl font-bold text-primary stat-number">{$number}</p>
        <p class="text-xl font-semibold text-gray-700 mt-2">{$label}</p>
    </div>
    HTML;
}
?>