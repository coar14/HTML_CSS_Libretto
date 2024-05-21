<?php


namespace Address;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;

class addressTag extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'address';

    public function __construct($styles = [], $selector = 'address')
    {
        parent::__construct($styles, $selector);
    }
}