<?php
namespace Star;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;
class figureTag extends HtmlStylerBase {
    protected $styles = [];
    protected $selector = 'figure';

    public function __construct($styles = [], $selector = 'figure') {
        parent::__construct($styles, $selector);
    }
}