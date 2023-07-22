<?php

final class PluginScripts
{
    private static $_instance = null;

    public static function instance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct()
    {
        $this->widget_styles();
        $this->widget_scripts();
    }

    public function widget_styles()
    {
        // Get the modified timestamp of your stylesheet file
        $stylesheet_version = filemtime(ROOT . '/dist/css/main.min.css');

        // Enqueue your stylesheet with the version parameter set to the modified timestamp
        wp_enqueue_style('lpi-core', plugins_url('/dist/css/main.min.css', __DIR__), array(), $stylesheet_version);
    }

    public function widget_scripts()
    {
        // Get the modified timestamp of your js file
        $script_version = filemtime(ROOT . '/dist/js/main.min.js');

        // Enqueue your script with the version parameter set to the modified timestamp
        wp_register_script('lpi-core',  plugins_url('/dist/js/main.min.js', __DIR__), array("jquery"), $script_version, true);

        wp_enqueue_script('lpi-core');
    }
}

PluginScripts::instance();
