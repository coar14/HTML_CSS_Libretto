<?php
namespace Headings;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;
class HtmlStylerH5 extends HtmlStylerBase {
    protected $styles = [];
    protected $selector = 'h5';

    public function __construct($styles = [], $selector = 'h5') {
        parent::__construct($styles, $selector);
    }
}