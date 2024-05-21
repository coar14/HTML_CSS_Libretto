<?php
namespace Section;
require_once __DIR__ . '/../HtmlStylerBase.php';
use HtmlStylerBase;
class sectionTag extends HtmlStylerBase {
    protected $styles = [];
    protected $selector = 'li';

    public function __construct($styles = [], $selector = 'li')
    {
        parent::__construct($styles, $selector);
    }
}