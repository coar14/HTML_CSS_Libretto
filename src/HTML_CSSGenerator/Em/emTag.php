<?php

namespace Em;

require_once __DIR__ . '/../HtmlStylerBase.php';

use HtmlStylerBase;

class emTag extends HtmlStylerBase {
    protected $styles = [];
    protected $selector = 'em';

    public function __construct($styles = [], $selector = 'em')
    {
        parent::__construct($styles, $selector);
    }
}