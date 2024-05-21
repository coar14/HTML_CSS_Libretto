<?php

namespace ListNamespace;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;

class OrderedList extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'ol';

    public function __construct($styles = [], $selector = 'ol')
    {
        parent::__construct($styles, $selector);
    }
}