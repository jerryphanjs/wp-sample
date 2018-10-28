<?php
  function wpb_customize_register($wp_customize) {
    //Showcase section
    $wp_customize->add_section('showcase', array(
      'title'       => __('Showcase', 'wpbootstrap'),
      'description' => sprintf(__('Option for showcase', 'wpbootstrap')),
      'priorty'     => 130
    ));

    $wp_customize->add_setting('showcase_heading', array(
      'default' => _x('Custom Bootstrap Wordpress Theme', 'wpbootstrap'),
      'type'    => 'theme_mod'
    ));

    $wp_customize->add_setting('showcase_imgage', array(
      'default'       => get_bloginfo('template_directory').'/img/showcase.jpg',
      'type'    => 'theme_mod'
    ));

    $wp_customize->add_control(new Wp_Customize_Image_COntrol($wp_customize, 'showcase_imgage', array(
      'label' => __('Showcase Image', 'wpbootstrap'),
      'section' => 'showcase',
      'settings' => 'showcase_imgage',
      'priorty'     => 1
    )));



    $wp_customize->add_control('showcase_heading', array(
      'label' => __('Heading', 'wpbootstrap'),
      'section' => 'showcase',
        'priorty'     => 2
    ));
    $wp_customize->add_setting('showcase_text', array(
      'default' => _x('Lore impedit unde quidem ut. Asperiores deserunt, aspernatur consequatur.', 'wpbootstrap'),
      'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('showcase_text', array(
      'label' => __('Text', 'wpbootstrap'),
      'section' => 'showcase',
        'priorty'     => 3
    ));
    $wp_customize->add_setting('btn_url', array(
      'default' => _x('https://test.com', 'wpbootstrap'),
      'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('btn_url', array(
      'label' => __('Button Url', 'wpbootstrap'),
      'section' => 'showcase',
        'priorty'     => 4
    ));
    $wp_customize->add_setting('btn_text', array(
      'default' => _x('Read more', 'wpbootstrap'),
      'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('btn_text', array(
      'label' => __('Button Text', 'wpbootstrap'),
      'section' => 'showcase',
        'priorty'     => 5
    ));
  }
  add_action('customize_register', 'wpb_customize_register');
