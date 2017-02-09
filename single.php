<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package dreamteam
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;

// Get person (a team member) who is author of the post
$args = array(
	'post_type' => 'team',
	'meta_key' => 'team_user',
	'meta_value' => $post->post_author()
);
$context['person'] = Timber::get_post( $args );

Timber::render( array( 'single.twig' ), $context );

