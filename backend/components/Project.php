<?php

final class Project
{
    public function __construct()
    {
        add_action("vc_after_init", [$this, "settings"]);
        add_shortcode("lpi_ui_project", [$this, "render"]);
    }

    public function settings()
    {
        vc_map([
            "name" => "Project",
            "base" => "lpi_ui_project",
            "category" => "UI",
            "description" => "Project component",
            "params" => [
                [
                    "type" => "textfield",
                    "heading" => "Title",
                    "param_name" => "title",
                    "description" => "Project title",
                ],
                [
                    "type" => "textfield",
                    "heading" => "Subtitle",
                    "param_name" => "subtitle",
                    "description" => "Project subtitle",
                ],
                [
                    "type" => "textfield",
                    "heading" => "Description",
                    "param_name" => "description",
                    "description" => "Project description",
                ],
                [
                    "type" => "textfield",
                    "heading" => "Link",
                    "param_name" => "link",
                    "description" => "Project link",
                ],
                [
                    "type" => "attach_image",
                    "heading" => "Image",
                    "param_name" => "image",
                    "description" => "Project image",
                ]
            ]
        ]);
    }

    public function render($atts)
    {
        $img = wp_get_attachment_image_src($atts["image"], "full");

        $out = '
        <a class="lpi-project" href="' . $atts["link"] . '">
            <div class="lpi-project-container lpi-project-logo">
                <img src="' . $img[0] . '" alt="">
            </div>
            <div class="lpi-project-container lpi-project-content">
                <h3>' . $atts["title"] . '</h3>
                <h6>' . $atts["subtitle"] . '</h6>
                <p>' . $atts["description"] . '</p>
            </div>
        </a>
        ';

        return $out;
    }
}

new Project();
