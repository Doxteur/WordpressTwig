<?php

use Timber\Timber;

$context['post'] = Timber::get_post();

\Timber\Timber::render('pages/single-product.twig', $context);

?>