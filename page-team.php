<?php
/**
 * Template Name: Team
 * Description: The template for displaying team page
 *
 * @package  dreamteam
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['team'] = Timber::get_posts( array( 'post_type' => 'team', 'posts_per_page' => -1 ) );

Timber::render( array( 'page-team.twig' ), $context );
