//ajout du titre
<?php
function ajout_title(){
  add_theme_support('title_tag');

}
add_action ('after_steup_theme','ajout_titre');

function ajout_style(){
  wp_enqueue_style('general',get_template_directory_uri().'css/style.css');
  // wp_enqueue_script('speical',get_template_directory_uri().'css/script.js');

}
add_action ('wp_enqueue_scripts','ajout_style');
