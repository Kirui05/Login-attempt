<?php
/**
 * @package Assessment7Plugin
 */

 namespace Inc\Base;
 class Activate{
    static function activate(){
        // RegisterBook::registerBook();
        flush_rewrite_rules();
    }
 }