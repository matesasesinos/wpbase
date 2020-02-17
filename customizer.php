<?php

function base_customize_register($wp_customize)
{

   /* footer */
   $wp_customize->add_panel('base_footer', array(
      'title'          => __('Texto del footer', 'base'),
      'description'    => '',
      'priority'       => 100,
      'capability'     => 'edit_theme_options',
      'theme_supports' => '',
   ));

   $wp_customize->add_section('marca_footer', array(
      'title' => __('Marca', 'base'),
      'panel' => 'base_footer',
      'priority' => 1,
      'capability' => 'edit_theme_options',
   ));

   $wp_customize->add_setting('marca', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
   ));

   $wp_customize->add_control('marca', array(
      'label' => __('Agregar o modificar Marca', 'base'),
      'section' => 'marca_footer',
      'description' => 'ej: © 2018 Acme. All right reserved',
      'priority' => 1,
      'type' => 'text',
   ));

   $wp_customize->add_section('direccion_footer', array(
      'title' => __('Dirección', 'base'),
      'panel' => 'base_footer',
      'priority' => 1,
      'capability' => 'edit_theme_options',
   ));

   $wp_customize->add_setting('direccion_text', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
   ));

   $wp_customize->add_control('direccion_text', array(
      'label' => __('Dirección', 'base'),
      'section' => 'direccion_footer',
      'description' => 'ej: Av. Córdoba 456',
      'priority' => 1,
      'type' => 'text',
   ));

   $wp_customize->add_setting('tel_text', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
   ));

   $wp_customize->add_control('tel_text', array(
      'label' => __('Teléfono', 'base'),
      'section' => 'direccion_footer',
      'description' => 'ej: 11 4312 1020',
      'priority' => 1,
      'type' => 'text',
   ));

   $wp_customize->add_setting('fax_text', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
   ));

   $wp_customize->add_control('fax_text', array(
      'label' => __('FAX', 'base'),
      'section' => 'direccion_footer',
      'description' => 'ej: 11 4312 1030',
      'priority' => 1,
      'type' => 'text',
   ));

   $wp_customize->add_setting('support_text', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
   ));

   $wp_customize->add_control('support_text', array(
      'label' => __('Soporte Técnico Teléfono', 'base'),
      'section' => 'direccion_footer',
      'description' => 'ej: 11 4312 0250',
      'priority' => 1,
      'type' => 'text',
   ));

   $wp_customize->add_setting('email_text', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
   ));

   $wp_customize->add_control('email_text', array(
      'label' => __('Email de contacto', 'base'),
      'section' => 'direccion_footer',
      'description' => 'ej: info@maximsoft.com.ar',
      'priority' => 1,
      'type' => 'text',
   ));
   
}
add_action('customize_register', 'base_customize_register');
