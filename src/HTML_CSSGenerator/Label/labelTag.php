<?php

namespace Label;

require_once __DIR__ . '/../HtmlStylerBase.php';

use HtmlStylerBase;

class labelTag extends HtmlStylerBase {
    protected $styles = [];
    protected $selector = 'label';

    public function __construct($styles = [], $selector = 'label')
    {
        parent::__construct($styles, $selector);
    }
}