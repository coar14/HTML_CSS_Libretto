<?php
namespace Star;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;
class starTag extends HtmlStylerBase {
    protected $styles = [];
    protected $selector = '*';

    public function __construct($styles = [], $selector = '*') {
        parent::__construct($styles, $selector);
    }
}