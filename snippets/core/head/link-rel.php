<?php 
    // Links to information about the author(s) of the document
    echo Html::tag('link', null, ["rel" => "author","href"=>$site->url()."/humans.txt"]).PHP_EOL;        
    // Links to a document that describes a collection of records, documents, or other materials of historical interest
    echo Html::tag('link', null, ["rel" => "archives","href"=>page('database')->url()]).PHP_EOL; // derive from $page        
    // Links to top level resource in an hierarchical structure
    echo Html::tag('link', null, ["rel" => "index","href"=>$site->url()]).PHP_EOL; // derive from $page       
    // Refers to a copyright statement that applies to the link's context
    echo Html::tag('link', null, ["rel" => "license","href"=> page('legal/disclaimer')->url()]).PHP_EOL; // derive from $site
    // Helps prevent duplicate content issues
    echo Html::tag('link', null, ["rel" => "canonical","href"=>$page->url()]).PHP_EOL; // derive from $page       
?>