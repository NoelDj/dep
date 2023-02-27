<?php

$str = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if($str == '/which-program-opens-svg-files'){
    $meta_title = 'Which program opens svg files?';
    $meta_desc = 'SVG files can be opened with many different programs, but we recommend using Inkscape or Adobe Illustrator.';
    require('program-opens-svg.php');
    exit;
}
if($str == '/how-to-change-svg-color-in-an-img-tag'){
    $meta_title = 'How to change svg color in an img tag';
    $meta_desc = 'When you are working in graphic design, you are often going to need to change the color of your SVG images.';
    require('change-svg-color-img.php');
    exit;
}
if($str == '/how-to-change-the-color-of-svg-using-css'){
    $meta_title = 'How to change the color of svg using css';
    $meta_desc = 'The color of an SVG file is defined in the element and can be changed by modifying the attributes of that element. ';
    require('how-to-change-the-color-of-svg.php');
    exit;
}
if($str == '/what-is-a-svg-file-for-cricut'){
    $meta_title = 'What is a svg file for cricut';
    $meta_desc = 'SVG files are great for digital cutting machines, like the Cricut Maker and Silhouette Cameo.';
    require('svg-cricut.php');
    exit;
}
if($str == '/what-is-a-svg-icon'){
    $meta_title = 'What is a svg icon?';
    $meta_desc = 'SVG icons are a great way to display your content in an attractive way.';
    require('svg-icon.php');
    exit;
}

if($str == '/privacy'){
    $meta_title = 'Privacy - Change SVG Color';
    $meta_desc = '';
    require('privacy2.php');
    exit;
}
if($str == '/contact'){
    $meta_title = 'Contact - Change SVG Color';
    $meta_desc = '';
    require('contact2.php');
    exit;
}

if($str == '/'){
  $title = 'Change SVG Color';
  $meta_title = 'Change SVG Color Online – 100% Free Tool (AI Enabled)';
  $meta_desc = 'Recolor or Change the color of your SVG Vectors in just a few clicks with our Smart AI Enabled tool. 100% Free with Auto Detect Feature. Visit now!';
  require('base.php'); 
  exit;
} 

?>