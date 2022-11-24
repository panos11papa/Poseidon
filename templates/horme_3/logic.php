<?php
/**
 * @package Horme 3 template
 * @author Spiros Petrakis
 * @copyright Copyright (C) 2015 - 2022 Spiros Petrakis. All rights reserved.
 * @license GNU General Public License version 2 or later
 *
 */

defined('_JEXEC') or die;

// variables
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$user = JFactory::getUser();
$params = $app->getParams();
$option = $app->input->getCmd('option');
$view = $app->input->getCmd('view');
$task = $app->input->getCmd('task');
$tmpl = $app->input->getCmd('tmpl');
$tpath = $this->baseurl . '/templates/' . $this->template;
$menu = $app->getMenu();
$lang = JFactory::getLanguage();
if ($menu->getActive() == $menu->getDefault($lang->getTag())) {
	$home = 'home';
} else {
	$home = 'nothome';
}

$bodyclass = $home . ' ' . $option . ' fds_' . $view;

// params
$links = $this->params->get('links');
$buttons = $this->params->get('buttons');
$background = $this->params->get('background');
$container = $this->params->get('container');

// Get page class
$pageclass = $params->get('pageclass_sfx');

// Output as HTML5
$this->setHtml5(true);

// Remove generator tag
$this->setGenerator(null);

// get html head data
$head = $doc->getHeadData();
// remove deprecated meta-data (html5)
unset($head['metaTags']['http-equiv']);

// Unset header css and js

if ($user->guest) {

	unset($head['scripts'][$this->baseurl . '/media/jui/js/chosen.jquery.min.js']);

}

$doc->setHeadData($head);

// Load css files
$doc->addStyleSheet('' . $tpath . '/css/horme.bootstrap.min.css');
$doc->addStyleSheet('' . $tpath . '/css/template.css');

if ($view == 'form' || $view == 'user') {
	// Load css for the editors
	$doc->addStyleSheet('' . $this->baseurl . '/templates/system/css/general.css');
}

// Custom js
if ($this->params->get('customjs')) {
	$doc->addScript('' . $tpath . '/js/custom.js', 'text/javascript', true);
}

// Body Background image
$bg = 'style="background: url(' . $background . ') no-repeat fixed center center;background-size: cover;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;"';

// Set module widths
$bscol = 'col-md-';
$bsrow = 'row';

if ($this->countModules('top-a') >= 4) {

	$tawidth = $bscol . '3';

} elseif ($this->countModules('top-a') == 3) {

	$tawidth = $bscol . '4';

} elseif ($this->countModules('top-a') == 2) {

	$tawidth = $bscol . '6';

} else {

	$tawidth = $bscol . '12';

}

if ($this->countModules('top-b') >= 4) {

	$tbwidth = $bscol . '3';

} elseif ($this->countModules('top-b') == 3) {

	$tbwidth = $bscol . '4';

} elseif ($this->countModules('top-b') == 2) {

	$tbwidth = $bscol . '6';

} else {

	$tbwidth = $bscol . '12';

}

if ($this->countModules('top-c') >= 4) {

	$tcwidth = $bscol . '3';

} elseif ($this->countModules('top-c') == 3) {

	$tcwidth = $bscol . '4';

} elseif ($this->countModules('top-c') == 2) {

	$tcwidth = $bscol . '6';

} else {

	$tcwidth = $bscol . '12';

}

if ($this->countModules('bottom-a') >= 4) {

	$bawidth = $bscol . '3';

} elseif ($this->countModules('bottom-a') == 3) {

	$bawidth = $bscol . '4';

} elseif ($this->countModules('bottom-a') == 2) {

	$bawidth = $bscol . '6';

} else {

	$bawidth = $bscol . '12';

}

if ($this->countModules('bottom-b') >= 4) {

	$bbwidth = $bscol . '3';

} elseif ($this->countModules('bottom-b') == 3) {

	$bbwidth = $bscol . '4';

} elseif ($this->countModules('bottom-b') == 2) {

	$bbwidth = $bscol . '6';

} else {

	$bbwidth = $bscol . '12';

}

if ($this->countModules('bottom-c') >= 4) {

	$bcwidth = $bscol . '3';

} elseif ($this->countModules('bottom-c') == 3) {

	$bcwidth = $bscol . '4';

} elseif ($this->countModules('bottom-c') == 2) {

	$bcwidth = $bscol . '6';

} else {

	$bcwidth = $bscol . '12';

}

if ($this->countModules('footer') >= 4) {

	$fwidth = $bscol . '3';

} elseif ($this->countModules('footer') == 3) {

	$fwidth = $bscol . '4';

} elseif ($this->countModules('footer') == 2) {

	$fwidth = $bscol . '6';

} else {

	$fwidth = $bscol . '12';

}
