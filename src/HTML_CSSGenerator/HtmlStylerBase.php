<?php

class HtmlStylerBase
{
    protected $styles = [];
    protected $selector = '';




    public function __construct($styles , $selector )
    {
        $this->styles = $styles;
        $this->selector = $selector;
    }
    public function addStyle($property, $value)
    {
        $this->styles[$property] = $value;
        return $this;
    }

    public function setSelector($selector)
    {
        $this->selector = $selector;
        return $this;
    }

    public function applyStyles()
    {
        $css = "$this->selector {\n";

        foreach ($this->styles as $property => $value) {
            $css .= " $property: $value;\n";
        }

        $css .= "}\n";

        file_put_contents('styles.css', $css, FILE_APPEND);
    }
}
