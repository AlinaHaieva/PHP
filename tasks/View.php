<?php

class View
{
    public function render($template, $args = []) {
        $data = $args;
        require_once($template);
    }
}