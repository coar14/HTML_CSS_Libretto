<?php
namespace Headings;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;
class HtmlStylerH6 extends HtmlStylerBase {
    protected $styles = [];
    protected $selector = 'h6';

    public function __construct($styles = [], $selector = 'h6') {
        parent::__construct($styles, $selector);
    }
}