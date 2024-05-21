<?php
namespace Span;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;
class spanTag extends HtmlStylerBase {
    protected $styles = [];
    protected $selector = 'span';

    public function __construct($styles = [], $selector = 'span') {
        parent::__construct($styles, $selector);
    }
}