<?php
namespace Headings;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;
class HtmlStylerH3 extends HtmlStylerBase {
    protected $styles = [];
    protected $selector = 'h3';

    public function __construct($styles = [], $selector = 'h3') {
        parent::__construct($styles, $selector);
    }
}