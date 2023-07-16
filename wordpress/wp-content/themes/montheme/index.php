<?php 

$context = \Timber\Timber::get_context();
$context['firstname'] = 'John';

\Timber\Timber::render('pages/index.twig', $context);

?>