<?php

namespace Textarea;

require_once __DIR__ . '/../HtmlStylerBase.php';

use HtmlStylerBase;

class textareaTag extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'textarea';

    public function __construct($styles = [], $selector = 'textarea')
    {
        parent::__construct($styles, $selector);
    }
}
