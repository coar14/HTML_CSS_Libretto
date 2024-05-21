<?php
namespace Headings;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;
class HtmlStylerH2 extends HtmlStylerBase {
    protected $styles = [];
    protected $selector = 'h2';

    public function __construct($styles = [], $selector = 'h2') {
        parent::__construct($styles, $selector);
    }
}