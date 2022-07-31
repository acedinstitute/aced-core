<?php
echo Html::tag('meta', null, ['name'=>"twitter:card",'content'=>"summary_large_image"]).PHP_EOL;
echo Html::tag('meta', null, ['name'=>"twitter:site",'content'=>"@acedplatform"]).PHP_EOL;
echo Html::tag('meta', null, ['name'=>"twitter:creator",'content'=>"@acedplatform"]).PHP_EOL;
echo Html::tag('meta', null, ['name'=>"twitter:url",'content'=>$page->url()]).PHP_EOL;
echo Html::tag('meta', null, ['name'=>"twitter:title",'content'=>$page->title()]).PHP_EOL;
$template = $page->template();
$description = "";

switch ($template) {
    case 'about':
        $description = $page->contentBody()->toBlocks()->excerpt($chars = 155, $strip = true, $rep = ' …');
        break;
    case 'collection':
        $description = $page->description()->excerpt($chars = 155, $strip = true, $rep = ' …');
        break;
    case 'collections':
        $description = $page->pageDescription();
        break;
    case 'contact':
        $description = $page->contentBody()->toBlocks()->excerpt($chars = 155, $strip = true, $rep = ' …');
        break;
    case 'content':
        $description = $page->contentBody()->toBlocks()->excerpt($chars = 155, $strip = true, $rep = ' …');
        break;
    case 'default':
        $description = $page->text()->excerpt($chars = 155, $strip = true, $rep = ' …');
        break;
    case 'episode':
        # code...
        break;
    case 'essay':
        # code...
        $description = $page->contentBody()->toBlocks()->excerpt($chars = 155, $strip = true, $rep = ' …');
        break;
    case 'home':
        $description = $page->pageDescription();
        break;
    case 'podcasts':
        # code...
        $description = $page->pageDescription();
        break;
    case 'support':
        # code...
        $description = $page->contentBody()->toBlocks()->excerpt($chars = 155, $strip = true, $rep = ' …');
        break;
    case 'work':
        # code...
        $description = $page->description()->excerpt($chars = 155, $strip = true, $rep = ' …');
        break;
    case 'works':
        # code...
        $description = $page->pageDescription();
        break;
    default:
        # code...
        $description = $site->description();
        break;
}


echo Html::tag('meta', null, ['name'=>"twitter:description",'content'=>$description]).PHP_EOL;
$file = $page->socialImage()->toFile();
if ($file):
    echo Html::tag('meta', null, ['name'=>"twitter:image",'content'=>$file->resize(1280)->url()]).PHP_EOL;
    echo Html::tag('meta', null, ['name'=>"twitter:image:alt",'content'=>$file->alt()]).PHP_EOL;
endif;
?>
