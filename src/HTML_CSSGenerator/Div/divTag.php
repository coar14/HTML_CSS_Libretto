<?php
namespace Div;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;
class divTag extends HtmlStylerBase {
    protected $styles = [];
    protected $selector = 'div';

    public function __construct($styles = [], $selector = 'div') {
        parent::__construct($styles, $selector);
    }
}