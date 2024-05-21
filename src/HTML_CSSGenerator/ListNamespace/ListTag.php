<?php


namespace ListNamespace;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;

class ListTag extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'li';

    public function __construct($styles = [], $selector = 'li')
    {
        parent::__construct($styles, $selector);
    }
}