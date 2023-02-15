<?php
abstract class AbstractController {

    public function render(string $view, array $values) : void
    {
        $template=$view;
        $data=$values;
        require 'templates/layout.phtml';
    }
    public function renders(string $view, array $values, array $value) : void
    {
        $template=$view;
        $data=$values;
        $data2=$value;
        require 'templates/layout.phtml';
    }
}
?>