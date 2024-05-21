<?php
namespace Media;

class MediaQueryStyler {
    protected $mediaQueries = [];

    public function __construct($mediaQueries = []) {
        $this->mediaQueries = $mediaQueries;
    }

    public function addMediaQuery($mediaQuery, $styles = []) {
        $this->mediaQueries[$mediaQuery] = $styles;
    }

    public function applyStyles() {
        foreach ($this->mediaQueries as $mediaQuery => $styles) {
            $css = "@media {$mediaQuery} {\n";

            foreach ($styles as $selector => $properties) {
                $css .= "  $selector {\n";
                foreach ($properties as $property => $value) {
                    $css .= "    $property: $value;\n";
                }
                $css .= "  }\n";
            }

            $css .= "}\n";

            file_put_contents('styles.css', $css, FILE_APPEND);
        }
    }
}