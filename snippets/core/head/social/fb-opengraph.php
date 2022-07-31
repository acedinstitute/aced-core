<?php
echo Html::tag('meta', null, ['property'=>"og:url",'content'=>$page->url()]).PHP_EOL; // derive from $page
echo Html::tag('meta', null, ['property'=>"og:type",'content'=>"website"]).PHP_EOL;
echo Html::tag('meta', null, ['property'=>"og:title",'content'=>$page->title()]).PHP_EOL; // derive from $page
$file = $page->socialImage()->toFile();
if ($file):
    echo Html::tag('meta', null, ['property'=>"og:image",'content'=>$file->resize(1280)->url()]).PHP_EOL; // derive from $page social
    echo Html::tag('meta', null, ['property'=>"og:image:alt",'content'=>$file->alt()]).PHP_EOL;
endif;

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

echo Html::tag('meta', null, ['property'=>"og:description",'content'=>$description]).PHP_EOL;
echo Html::tag('meta', null, ['property'=>"og:site_name",'content'=>$site->title()]).PHP_EOL;
echo Html::tag('meta', null, ['property'=>"og:locale",'content'=>$kirby->language()->locale()]).PHP_EOL;
echo Html::tag('meta', null, ['property'=>"article:author",'content'=>$site->author()]).PHP_EOL; // derive from $page
?>
