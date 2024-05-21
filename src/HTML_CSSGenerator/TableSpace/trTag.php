<?php

namespace TableSpace;

require_once __DIR__ . '/../HtmlStylerBase.php';

use HtmlStylerBase;

class trTag extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'tr';

    public function __construct($styles = [], $selector = 'tr')
    {
        parent::__construct($styles, $selector);
    }
}
