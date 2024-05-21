<?php
namespace Headings;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;
class HtmlStylerH1 extends HtmlStylerBase {
    protected $styles = [];
    protected $selector = 'h1';

    public function __construct($styles = [], $selector = 'h1') {
        parent::__construct($styles, $selector);
    }
}