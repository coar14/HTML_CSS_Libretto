<?php

namespace Input;

require_once __DIR__ . '/../HtmlStylerBase.php';

use HtmlStylerBase;

class inputTag extends HtmlStylerBase {
    protected $styles = [];
    protected $selector = 'input';

    public function __construct($styles = [], $selector = 'input')
    {
        parent::__construct($styles, $selector);
    }
}