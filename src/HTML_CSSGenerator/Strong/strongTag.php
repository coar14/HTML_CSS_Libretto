<?php

namespace Strong;

require_once __DIR__ . '/../HtmlStylerBase.php';

use HtmlStylerBase;

class strongTag extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'strong';

    public function __construct($styles = [], $selector = 'strong')
    {
        parent::__construct($styles, $selector);
    }
}
