<?php

namespace Body;

require_once __DIR__ . '/../HtmlStylerBase.php';

use HtmlStylerBase;

class bodyTag extends HtmlStylerBase {
    protected $styles = [];
    protected $selector = 'body';

    public function __construct($styles = [], $selector = 'body')
    {
        parent::__construct($styles, $selector);
    }
}