<?php

$benefits = [
    [
        'text' => '22 года в сфере психологических услуг',
        'url' => '/about',
        'src' => '/wp-content/uploads/2016/06/22-goda-120x120.png',
    ],
    [
        'text' => 'Более 30 высоко-квалифицированных специалистов',
        'url' => '/team',
        'src' => '/wp-content/uploads/2016/06/spetsialisty-120x120.png',
    ],
    [
        'text' => 'Свыше 40 направлений консультирования',
        'url' => '/services',
        'src' => '/wp-content/uploads/2016/06/napravleniya-konsultirovaniya2-1-120x120.png',
    ],
    [
        'text' => 'Гибкая политика<br>цен',
        'url' => '/prices',
        'src' => '/wp-content/uploads/2016/06/gibkaya-politika-tsen-120x120.png',
    ],
    [
        'text' => 'Более 3000 благодарных клиентов',
        'url' => '#',
        'src' => '/wp-content/uploads/2016/06/bolee-3000-blagodarnyh-klientov-120x120.png',
    ],
    [
        'text' => 'Индивидуальный подход к каждому клиенту',
        'url' => '/about',
        'src' => '/wp-content/uploads/2016/06/individualnyj-podhod2-120x120.png',
    ],
    [
        'text' => 'Конфиденциальность',
        'url' => '/about',
        'src' => '/wp-content/uploads/2016/06/konfidentsialnost2-120x120.png',
    ],
];
$rows = [];
foreach ($benefits as $benefit) {
    $rows[] = <<<HTML
        <div class="psy-ben-item">
            <a href="{$benefit['link']}" class="psy-item-link"></a>
            <div  class="psy-ben-icon">
                <img src="{$benefit['src']}" class="vc_single_image-img attachment-thumbnail" alt="">
            </div>            
            <p>{$benefit['text']}</p>
        </div>            
        
HTML;
}
$rowsHtml = implode("\n", $rows);
return <<<HTML
<div class="psy-benefits">
    <h2 class="psy-ben-title">Наши преимущества</h2>
    <div class="vc_row wpb_row vc_row-fluid">
{$rowsHtml}        
    </div>
    <div class="clearfix"></div>
</div>
HTML;
