<?php
/**
 * The Template for displaying single team page
 *
 * @package dreamteam
 */

$context = Timber::get_context();

// Get posts of the associated user
$user = $context['post']->get_field('team_user');
if ($user) {
	$context['user_posts'] = Timber::get_posts(array('author' => $user['ID'], 'post_type' => 'post', 'numberposts' => 3 ));
}

// Get user's interview
$interview = $context['post']->get_field('team_interview');
if ($interview) {
	$context['interview'] = new TimberPost($interview);
}

Timber::render( array( 'single-team.twig' ), $context );
