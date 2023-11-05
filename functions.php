<?php
    //Подключение скрипта в вордпресс
    add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles' );
    add_theme_support( 'custom-logo' );

    function add_scripts_and_styles() {
        //Deregister подключенного jquery
        wp_deregister_script( 'jquery' );
        //Регистрации скрипта + получение директории 
        wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', 
        false, null, true );
        //Добавление скрипта
        wp_enqueue_script( 'jquery' );
        //Подключение main.js после jquery
        wp_enqueue_script( 'main.js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);

        wp_enqueue_style( 'fontello', get_template_directory_uri() . '/assets/css/fontello.css');
        //Специальный функция get_stylesheet_uri() для получения пути до main.css
        wp_enqueue_style( 'main', get_stylesheet_uri(), array('fontello') );

    }
?>