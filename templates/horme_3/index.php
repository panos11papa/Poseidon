<?php
/**
* @package Horme 3 template
* @author Spiros Petrakis
* @copyright Copyright (C) 2015 - 2022 Spiros Petrakis. All rights reserved.
* @license GNU General Public License version 2 or later
*
*/
defined('_JEXEC') or die;
JHtml::_('jquery.framework'); // Load jQuery
JHtml::_('bootstrap.framework'); // Load bootstrap js
require_once JPATH_THEMES.'/'.$this->template.'/logic.php'; // load logic.php
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<?php if ( $this->params->get('googleFont') && $this->params->get('gfontslink')) {
		echo $this->params->get('gfontslink');
	}; ?>
	<jdoc:include type="head" />
	<?php if ($this->params->get('bgcolor')) { ?>
	<!-- Body Background color -->
	<style>
		body{ background-color: <?php echo $this->params->get('bgcolor') ; ?>}
	</style>
	<?php } ?>
	<?php if ($this->params->get('boxcolor')) { ?>
	<!-- Content Backgroumd color -->
	<style>
		<?php echo $container; ?>{ background-color: <?php echo $this->params->get('boxcolor') ; ?>}
	</style>
	<?php } ?>
	<?php if ($this->params->get('customcss')) { ?>
	<!-- Load Custom css -->
	<link rel="stylesheet" href="<?php echo $tpath; ?>/css/custom.css" type="text/css" />
	<?php } ?>
	<?php if ( $this->params->get('googleFont') && $this->params->get('bodygfontscss')) { ?>
	<style>
		<?php echo $this->params->get('bodygfontscss'); ?>
	</style>
	<?php }; ?>
	<?php // Google Analytics
		if ($this->params->get('analytics')) {
			echo $this->params->get('analytics');
		}
	?>
</head>
<body id="body" class="<?php echo $pageclass . ' ' . $bodyclass; ?>" <?php if ($background) {echo $bg;} // Background image ?>>
	<!-- Toolbar Section -->
	<?php if ($this->countModules('toolbar-l') || $this->countModules('toolbar-r')) { ?>
	<div id="fds-toolbar">
		<div class="<?php echo $container; ?>">
			<div class="<?php echo $bsrow; ?> toolbar">
				<div class="col-xs-6 col-sm-6 toolbar-l">
				<jdoc:include type="modules" name="toolbar-l" style="none" />
				</div>
				<div class="col-xs-6 col-sm-6 toolbar-r text-right">
				<jdoc:include type="modules" name="toolbar-r" style="none" />
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<?php if ($this->countModules('search') || $this->countModules('cart')) { ?>
	<!-- Header Section -->
	<header id="fds-header">
		<div class="<?php echo $container; ?> hidden-xs">
			<div class="<?php echo $bsrow; ?>">
				<div class="col-sm-4 fds-logo" data-mh="header">
					<a href="<?php echo JURI::base(); ?>">
					<jdoc:include type="modules" name="logo" style="none" />
					</a>
				</div>
				<div class="col-sm-4 search" data-mh="header">
				<?php if ($this->countModules('search')) { ?>
				<jdoc:include type="modules" name="search" style="none" />
				<?php } ?>
				</div>
				<?php if ($this->countModules('cart')) { ?>
				<div class="col-sm-4 cart text-right" data-mh="header">
				<jdoc:include type="modules" name="cart" style="none" />
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="container mobile-header visible-xs">
			<div class="row">
				<div class="col-xs-6 mobile-logo">
					<a href="<?php echo JURI::base(); ?>">
						<?php if ($this->params->get('mobileLogo')) { ?>
						<img src="<?php echo $this->params->get('mobileLogo'); ?>" alt="<?php echo $app->get('sitename'); ?>" />
						<?php } else { ?>
						<jdoc:include type="modules" name="logo" style="none" />
						<?php } ?>
					</a>
				</div>
				<div class="col-xs-6">
					<ul class="mobile-buttons list-inline">
						<li>
							<button id="m-search" type="button" title="<?php echo JText::_('TPL_VM_SHOW_SEARCH'); ?>"><span class="glyphicon glyphicon-search"></span></button>
						</li>
						<li>
							<button id="m-cart" type="button" onclick="window.location.href='<?php echo JRoute::_('index.php?option=com_virtuemart&amp;view=cart'); ?>'" title="<?php echo JText::_('TPL_VM_SHOW_CART'); ?>">
								<span class="glyphicon glyphicon-shopping-cart"></span>
							</button>
						</li>
						<li>
							<button type="button" id="offcanvas-toggle" title="<?php echo JText::_('TPL_VM_MENU'); ?>">
								<span class="sr-only">Toggle navigation</span><span class="glyphicon glyphicon-menu-hamburger"></span>
							</button>
						</li>
					</ul>
				</div>
			</div>
			<?php if ($this->countModules('search')) { ?>
			<div class="row mobile-search">
			<jdoc:include type="modules" name="search" style="none" />
			</div>
			<?php } ?>
		</div>
	</header>
	<?php } ?>
	<!-- Main menu -->
	<?php if ($this->countModules('menu')) { ?>
	<nav class="navbar navbar-default hidden-xs">
		<div class="container">
			<div id="fds-navbar">
			<jdoc:include type="modules" name="menu" style="none" />
			</div>
		</div>
	</nav>
	<?php } ?>
	<!-- Breadcrumbs -->
	<?php if ($this->countModules('breadcrumbs')) { ?>
	<div class="<?php echo $container; ?>">
		<div class="<?php echo $bsrow; ?>">
			<div class="<?php echo $bscol; ?>12">
			<jdoc:include type="modules" name="breadcrumbs" style="none" />
			</div>
		</div>
	</div>
	<?php } ?>
	<!-- Slider Section -->
	<?php if ($this->countModules('slider')) { ?>
	<div id="fds-slider" >
		<div class="<?php echo $container; ?>">
			<div class="<?php echo $bsrow; ?>">
				<div class="<?php echo $bscol; ?>12">
				<jdoc:include type="modules" name="slider" style="none" />
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<!-- Top-a Section -->
	<?php if ($this->countModules('top-a')) { ?>
	<div id="fds-top-a" class="margin-top">
		<div class="<?php echo $container; ?> ">
			<div class="<?php echo $bsrow; ?> top-a">
			<jdoc:include type="modules" name="top-a" style="custom" width="<?php echo $tawidth ?>" />
			</div>
		</div>
	</div>
	<?php } ?>
	<!-- Top-b Section -->
	<?php if ($this->countModules('top-b')) { ?>
	<div id="fds-top-b" class="margin-top">
		<div class="<?php echo $container; ?> ">
			<div class="<?php echo $bsrow; ?> top-b">
			<jdoc:include type="modules" name="top-b" style="custom" width="<?php echo $tbwidth ?>" />
			</div>
		</div>
	</div>
	<?php } ?>
	<!--Top-c Section-->
	<?php if ($this->countModules('top-c')) { ?>
	<div id="fds-top-b" class="margin-top">
		<div class="<?php echo $container; ?> ">
			<div class="<?php echo $bsrow; ?> top-c">
			<jdoc:include type="modules" name="top-c" style="custom" width="<?php echo $tcwidth ?>" />
			</div>
		</div>
	</div>
	<?php } ?>
	<!-- Component & Sidebars Section -->
	<div id="fds-main" class="margin-top">
		<div class="<?php echo $container; ?>">
			<div class="<?php echo $bsrow; ?>">
				<div class="main-wrapper
				<?php if ($this->countModules('sidebar-a') && $this->countModules('sidebar-b')) {
				echo "col-md-6 col-md-push-3";
				} elseif ($this->countModules('sidebar-a') && !$this->countModules('sidebar-b')) {
				echo "col-md-9 col-md-push-3";
				} elseif ($this->countModules('sidebar-b') && !$this->countModules('sidebar-a')) {
				echo "col-md-9";
				} else {
				echo "col-md-12";
				} ?>">
				<?php if ($this->countModules('innertop')) { ?>
				<div class="<?php echo $bsrow; ?> innertop">
						<div class="<?php echo $bscol; ?>12">
						<jdoc:include type="modules" name="innertop" style="html" />
						</div>
				</div>
				<?php } ?>
				<main class="<?php echo $bsrow; ?>">
						<div class="<?php echo $bscol; ?>12">
						<jdoc:include type="message" />
						<jdoc:include type="component" />
						</div>
				</main>
				<?php if ($this->countModules('innerbottom')) { ?>
				<div class="<?php echo $bsrow; ?> innerbottom">
						<div class="<?php echo $bscol; ?>12">
						<jdoc:include type="modules" name="innerbottom" style="html" />
						</div>
				</div>
				<?php } ?>
				</div> <!-- Main wrapper end -->
				<?php if ($this->countModules('sidebar-a')) { ?>
				<aside class="<?php echo $bscol; ?>3 sidebar-a
				<?php if (!$this->countModules('sidebar-b')) {
				echo 'col-md-pull-9';
				} else {
				echo 'col-md-pull-6';
				} ?>">
				<jdoc:include type="modules" name="sidebar-a" style="html" />
				</aside>
				<?php } ?>
				<?php if ($this->countModules('sidebar-b')) { ?>
				<aside class="<?php echo $bscol; ?>3 sidebar-b">
				<jdoc:include type="modules" name="sidebar-b" style="html" />
				</aside>
				<?php } ?>
			</div> <!-- Row end -->
		</div> <!-- Container end -->
	</div> <!-- Component & Sidebars Section End -->
	<!-- Bootom-a Section -->
	<?php if ($this->countModules('bottom-a')) { ?>
	<div id="fds-bottom-a" class="margin-top">
		<div class="<?php echo $container; ?> ">
			<div class="<?php echo $bsrow; ?> bottom-a">
			<jdoc:include type="modules" name="bottom-a" style="custom" width="<?php echo $bawidth ?>" />
			</div>
		</div>
	</div>
	<?php } ?>
	<!-- Bootom-b Section -->
	<?php if ($this->countModules('bottom-b')) { ?>
	<div id="fds-bottom-b" class="margin-top">
		<div class="<?php echo $container; ?> ">
			<div class="<?php echo $bsrow; ?> bottom-b">
			<jdoc:include type="modules" name="bottom-b" style="custom" width="<?php echo $bbwidth ?>" />
			</div>
		</div>
	</div>
	<?php } ?>
	<!--Bootom-c Section-->
	<?php if ($this->countModules('bottom-c')) { ?>
	<div id="fds-bottom-c" class="margin-top">
		<div class="<?php echo $container; ?> ">
			<div class="<?php echo $bsrow; ?> bottom-c">
			<jdoc:include type="modules" name="bottom-c" style="custom" width="<?php echo $bcwidth ?>" />
			</div>
		</div>
	</div>
	<?php } ?>
	<!-- Footer Section -->
	<?php if ($this->countModules('footer')) { ?>
	<footer id="fds-footer" >
		<div class="<?php echo $container; ?> ">
			<div class="<?php echo $bsrow; ?>">
			<jdoc:include type="modules" name="footer" style="custom" width="<?php echo $fwidth ?>"/>
			</div>
			<?php if ( $this->countModules('copyright') || $this->params->get('credit') ) { ?>
			<div class="footer-separator"></div>
			<div class="row">
				<?php if ($this->countModules('copyright')) { ?>
				<div class="col-xs-12<?php echo $this->params->get('credit') ? ' col-sm-6' : ''; ?><?php echo $this->params->get('credit') ? '' : ' text-center'; ?>">
					<div class="copyright"><jdoc:include type="modules" name="copyright" style="none" /></div>
				</div>
				<?php } ?>
				<?php if ($this->params->get('credit')) { ?>
				<div class="col-xs-12<?php echo $this->countModules('copyright') ? ' col-sm-6' : ''; ?><?php echo $this->countModules('copyright') ? ' text-right' : ' text-center'; ?>">
					<div class="credits"><a href="https://www.olympianthemes.com" target="_blank" rel="noopener">VirtueMart template</a> by olympianthemes.com</div>
				</div>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
	</footer>
	<?php } ?>
	<?php if ($this->countModules('absolute')) { ?>
	<div id="fds-absolute">
	<jdoc:include type="modules" name="absolute" style="none" />
	</div>
	<?php } ?>
	<jdoc:include type="modules" name="debug" />
	<!-- To Top Anchor -->
	<a id="totop-scroller" class="btn btn-default" href="#page" title="Back to top">
		<span class="glyphicon glyphicon-arrow-up"></span>
	</a>
	<!-- Offcanvas -->
	<div id="offcanvas" class="navbar-inverse hidden-lg">
		<button id="cls-btn" type="button"><span class="glyphicon glyphicon-remove"></span></button>
		<div class="off-canvas-wrapper">
			<a class="off-logo" href="<?php echo JURI::base(); ?>">
				<?php if ($this->params->get('offcanvasLogo')) { ?>
				<img src="<?php echo $this->params->get('offcanvasLogo'); ?>" alt="<?php echo $app->get('sitename'); ?>" />
				<?php } elseif ($this->params->get('mobileLogo')) { ?>
				<img src="<?php echo $this->params->get('mobileLogo'); ?>" alt="<?php echo $app->get('sitename'); ?>" />
				<?php } else { ?>
				<jdoc:include type="modules" name="logo" style="none" />
				<?php } ?>
			</a>
			<jdoc:include type="modules" name="menu" style="none" />
		</div>
	</div>
	<!-- Javascript -->
	<script src="<?php echo $tpath; ?>/js/template.js" defer="defer"></script>
</body>
</html>