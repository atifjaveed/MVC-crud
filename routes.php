<?php
$routes =[
[
    "path"=>"/",
    "controller"=>"website",
    "action"=>"index"
],
[
    "path"=>"/students",
    "controller"=>"website",
    "action"=>"students"
],
[
    "path" => "/students/{id}/edit",
    "controller" => "website",
    "action" => "edit"
],
[
    "path" => "/students/{id}/update",
    "controller" => "website",
    "action" => "update"
],
[
    "path" => "/students/{id}/delete",
    "controller" => "website",
    "action" => "delete"
],
[
    "path" => "/students/save",
    "controller" => "website",
    "action" => "save"
],

[
    "path"=>"/atif",
    "controller"=>"website",
    "action"=>"atif"
],
[
    "path"=>"/haris",
    "controller"=>"website",
    "action"=>"haris"
]
];
?>