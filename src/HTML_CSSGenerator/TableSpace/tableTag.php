<?php

namespace TableSpace;

require_once __DIR__ . '/../HtmlStylerBase.php';

use HtmlStylerBase;

class tableTag extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'table';

    public function __construct($styles = [], $selector = 'table')
    {
        parent::__construct($styles, $selector);
    }
}
