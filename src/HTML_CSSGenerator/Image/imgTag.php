<?php
namespace Image;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;
class imgTag extends HtmlStylerBase {
    protected $styles = [];
    protected $selector = 'img';

    public function __construct($styles = [], $selector = 'img') {
        parent::__construct($styles, $selector);
    }
}