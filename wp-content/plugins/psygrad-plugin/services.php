<?php

/** @var WP_Post $post */
global $post;
$rows = [];
$icon = '<i class="fa fa-chevron-circle-right"></i>';
/** @var WP_Term $category */
foreach (get_the_terms(get_the_ID(), "dt_team_category") as $category) {
    $rows[] = <<<HTML
<a class="dt-btn-m dt-btn" href="/services/{$category->slug}">{$icon}{$category->name}</a>
HTML;
}
echo implode("\n", $rows);
