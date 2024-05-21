<?php


namespace Anchor;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;

class anchorTag extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'a';

    public function __construct($styles = [], $selector = 'a')
    {
        parent::__construct($styles, $selector);
    }
}

