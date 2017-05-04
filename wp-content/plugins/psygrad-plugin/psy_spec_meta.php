<?php

/** @var WP_Post $post */
global $post;

$docs = [];
$images = acf_photo_gallery('docs', $post->ID);
foreach ($images as $image) {
    $docs[] = '[vc_single_image el_class="psy-doc-img" image="'.$image['id'].'" img_size="doc-img" style="vc_box_shadow_3d" onclick="link_image"]';
}
$docsList = implode("\n", $docs);
if ($docs) {
    $docsList = "<h4>Документы об образовании</h4>\n".$docsList;
}

$content = <<<HTML
<div class="psy-spec-metabox">
    [vc_single_image source="featured_image" img_size="medium" alignment="center" onclick="link_image"]
    <div class="psy-spec-meta-wrapper">
    <h5>Направления консультирования</h5>
    [psy-services]
    [dt_button el_class="eModal-1" button_alignment="center" size="medium" bg_color_style="custom" bg_color="#0c3c93" bg_hover_color_style="custom" bg_hover_color="#003393"]Записаться[/dt_button]
    {$docsList}
    </div>
</div>
HTML;


return do_shortcode($content);
