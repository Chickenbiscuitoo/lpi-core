<?php

final class Header
{
    public function __construct()
    {
        add_action("vc_after_init", [$this, "settings"]);
        add_shortcode("lpi_ui_header", [$this, "render"]);
    }

    public function settings()
    {
        vc_map([
            "name" => "Header",
            "base" => "lpi_ui_header",
            "category" => "UI",
            "description" => "Header component",
        ]);
    }

    public function render()
    {
        $out = '
        <header class="lpi-header">
            <div class="lpi-header-trademarks">
                <img src="/wp-content/plugins/lpi-core/src/assets/logo.png" alt="LPI logo">
                <h5>LUKAS PISKORIK</h5>
            </div>
            <div class="lpi-header-navigation">
                <button id="lpi-header-menu-button">
                    <img src="/wp-content/plugins/lpi-core/src/assets/menuIconClosed.svg" alt="menuIconClosed" id="lpi-header-menu-icon-closed" class="lpi-header-menu-icon-hidden">
                    <img src="/wp-content/plugins/lpi-core/src/assets/menuIconOpened.svg" alt="menuIconOpened" id="lpi-header-menu-icon-opened">
                </button>
            </div>
        </header>';

        return $out;
    }
}

new Header();
