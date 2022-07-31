<?php 
    // Control the behavior of search engine crawling and indexing
    echo Html::tag('meta', null, ['name'=>"robots",'content'=>"index,follow"]).PHP_EOL; // All Search Engines
    echo Html::tag('meta', null, ['name'=>"googlebot",'content'=>"index,follow"]).PHP_EOL; // Google Specific
    // Tells Google not to show the sitelinks search box
    echo Html::tag('meta', null, ['name'=>"google",'content'=>"nositelinkssearchbox"]).PHP_EOL;
    // Tells Google not to provide a translation for this document
    echo Html::tag('meta', null, ['name'=>"google",'content'=>"notranslate"]).PHP_EOL;
    // Verify website ownership
    // echo Html::tag('meta', null, ['name'=>"google-site-verification",'content'=>"verification_token"]).PHP_EOL; //  Google Search Console
    // echo Html::tag('meta', null, ['name'=>"yandex-verification",'content'=>"verification_token"]).PHP_EOL; // Yandex Webmasters
    // echo Html::tag('meta', null, ['name'=>"msvalidate.01",'content'=>"verification_token"]).PHP_EOL; // Bing Webmaster Center
    // echo Html::tag('meta', null, ['name'=>"alexaVerifyID",'content'=>"verification_token"]).PHP_EOL; //  Alexa Console
    // echo Html::tag('meta', null, ['name'=>"p:domain_verify",'content'=>"code_from_pinterest"]).PHP_EOL; // Pinterest Console
    // echo Html::tag('meta', null, ['name'=>"norton-safeweb-site-verification",'content'=>"norton_code"]).PHP_EOL; // Norton Safe Web 
?>