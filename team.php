<?php
/**
 * Template Name: Team
 * Description: The template for displaying team page
 *
 * @package  dreamteam
 */

$context = Timber::get_context();
$context['team'] = Timber::get_posts( array( 'post_type' => 'team', 'posts_per_page' => -1 ) );

Timber::render( array( 'page-team.twig' ), $context );
