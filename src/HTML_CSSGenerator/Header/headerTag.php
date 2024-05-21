<?php

namespace Header;

require_once __DIR__ . '/../HtmlStylerBase.php';

use HtmlStylerBase;

class headerTag extends HtmlStylerBase{
    protected $styles = [];
    protected $selector = 'header';

    public function __construct($styles = [], $selector = 'header')
    {
        parent::__construct($styles, $selector);
    }
}
