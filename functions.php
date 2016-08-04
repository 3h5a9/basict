<?php
  function basict_script_enqeue(){
    wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/master.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/master.js', array(), '1.0.0', true );
  }
  add_action('wp_enqueue_scripts', 'basict_script_enqeue' );
?>