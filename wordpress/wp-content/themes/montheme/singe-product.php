<?php

use Timber\Timber;

$context['post'] = Timber::get_post();

Timber::render('pages/base.twig', $context);