<?php
    // Set the character encoding for this document, so that all characters within the UTF-8 space (such as emoji) are rendered correctly.
    echo Html::tag('meta', null, ["charset" => "utf-8"]).PHP_EOL;
    // the viewport meta tag controls how a site is viewed on mobile. device-width fixes it to the device. initial-scale 1 sets zoom to 100%
    echo Html::tag('meta', null, ["name" => "viewport","content"=>"width=device-width,initial-scale=1.0"]).PHP_EOL;
    // Allows control over where resources are loaded from. Place as early in the <head> as possible, as the tag only applies to resources that are declared after it.
    //echo Html::tag('meta', null, ["http-equiv" => "Content-Security-Policy","content"=>"default-src 'self'"]).PHP_EOL;
    // Completely opt out of DNS prefetching by setting to "off"
    // echo Html::tag('meta', null, ["http-equiv" => "x-dns-prefetch-control","content"=>"off"]).PHP_EOL;
    // Specifies the document to appear in a specific frame
    //echo Html::tag('meta', null, ["http-equiv" => "Window-Target","content"=>"_value"]).PHP_EOL;
    // Identify the software used to build the document (i.e. - WordPress, Dreamweaver)
    echo Html::tag('meta', null, ["name" => "generator","content"=>"Kirby"]).PHP_EOL;
    // Allows control over how referrer information is passed
    echo Html::tag('meta', null, ['name'=>"referrer",'content'=>"no-referrer"]).PHP_EOL;
    // Theme Color for Chrome, Firefox OS and Opera.
    echo Html::tag('meta', null, ['name'=>"theme-color",'content'=>"#000000"]).PHP_EOL; // derive from the page's primary-color attribute      
    // Short description of the document (limit to 150 characters) This content *may* be used as a part of search engine results.
    echo Html::tag('meta', null, ['name'=>"description",'content'=>$page->pageDescription()]).PHP_EOL; // derive from $page        
    // Short description of your document's subject
    echo Html::tag('meta', null, ['name'=>'subject','content'=>"your document's subject"]).PHP_EOL; // derive from $page        
    // Gives a general age rating based on the document's content
    echo Html::tag('meta', null, ['name'=>'rating','content'=>'General']).PHP_EOL; // derive from $site
    // Disable automatic detection and formatting of possible phone numbers 
    echo Html::tag('meta', null, ['name'=>'format-detection','content'=>'telephone=no']).PHP_EOL; // derive from $site
?>