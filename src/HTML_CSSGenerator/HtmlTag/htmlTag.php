<?php

namespace htmlTag;

require_once __DIR__ . '/../HtmlStylerBase.php';

use HtmlStylerBase;

class htmlTag extends HtmlStylerBase {
    protected $styles = [];
    protected $selector = 'html';

    public function __construct($styles = [], $selector = 'html')
    {
        parent::__construct($styles, $selector);
    }
}