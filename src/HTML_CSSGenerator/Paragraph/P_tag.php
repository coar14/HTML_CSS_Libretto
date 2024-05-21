<?php
namespace Paragraph;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;
class P_tag extends HtmlStylerBase {
    protected $styles = [];
    protected $selector = 'p';

    public function __construct($styles = [], $selector = 'p') {
        parent::__construct($styles, $selector);
    }
}