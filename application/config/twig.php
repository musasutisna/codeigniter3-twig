<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * ------------------------------------------------------------------------
 * Twig Configuration
 * ------------------------------------------------------------------------
 */
$config['twig']['template_dir'] = VIEWPATH;
$config['twig']['template_ext'] = 'php';
$config['twig']['environment']['autoescape'] = 'html';
$config['twig']['environment']['cache'] = FALSE;
$config['twig']['environment']['debug'] = FALSE;
