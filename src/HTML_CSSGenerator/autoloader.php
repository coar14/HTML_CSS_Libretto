<?php
//
//spl_autoload_register(function ($class) {
//    $file = __DIR__ . '/src/' . str_replace('\\', '/', $class) . '.php';
//    if (file_exists($file)) {
//        require $file;
//    }
//});


spl_autoload_register(function ($class) {
    $extensions = ['.php', '.html', '.css'];
    foreach ($extensions as $extension) {
        $file = __DIR__ . '/src/' . str_replace('\\', '/', $class) . $extension;
        if (file_exists($file)) {
            require $file;
            break; // Stop loop once the file is found
        }
    }
});


?>
