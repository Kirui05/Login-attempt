<?php
/**
 * @package Assessment7Plugin
 */
namespace Inc\Base;
class Deactivate{
    static function deactivate(){
        flush_rewrite_rules();
    }
}