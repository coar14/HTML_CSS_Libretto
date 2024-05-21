<?php
namespace Headings;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;
class HtmlStylerH4 extends HtmlStylerBase {
    protected $styles = [];
    protected $selector = 'h4';

    public function __construct($styles = [], $selector = 'h4') {
        parent::__construct($styles, $selector);
    }
}