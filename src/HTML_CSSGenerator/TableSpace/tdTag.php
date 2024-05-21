<?php

namespace TableSpace;

require_once __DIR__ . '/../HtmlStylerBase.php';

use HtmlStylerBase;

class tdTag extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'td';

    public function __construct($styles = [], $selector = 'td')
    {
        parent::__construct($styles, $selector);
    }
}
