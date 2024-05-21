<?php

namespace ListNamespace;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;

class UnorderedList extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'ul';

    public function __construct($styles = [], $selector = 'ul')
    {
        parent::__construct($styles, $selector);
    }
}