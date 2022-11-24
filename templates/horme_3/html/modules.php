<?php
/**
* @package Horme 3 template
* @author Spiros Petrakis
* @copyright Copyright (C) 2015 - 2022 Spiros Petrakis. All rights reserved.
* @license GNU General Public License version 2 or later
*
*/

defined('_JEXEC') or die;


function modChrome_custom($module, &$params, &$attribs)
{

	if (isset( $attribs['width'] )) {
	$width = $attribs['width'];
	} else {
	$width = 'col-md-12' ;
	} ;

	if (!empty ($module->content)) : ?>
	<div class="<?php echo $width ; ?> moduletable <?php echo htmlspecialchars($params->get('moduleclass_sfx'), ENT_QUOTES, 'UTF-8'); ?>" data-mh="<?php echo $module->position; ?>">
		<div class="border">
		<?php if ($module->showtitle != 0) : ?>
		<h3><?php echo JText::_($module->title); ?></h3>
		<?php endif; ?>
		<?php echo $module->content; ?>
		</div>
	</div>
	<?php endif; ?>

 <?php };

 /*
 * xhtml (divs and font headder tags)
 */
function modChrome_html($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>
	<div class="moduletable <?php echo htmlspecialchars($params->get('moduleclass_sfx'), ENT_QUOTES, 'UTF-8'); ?>">
		<div class="border">
			<?php if ($module->showtitle != 0) : ?>
			<h3><?php echo JText::_($module->title); ?></h3>
			<?php endif; ?>
			<?php echo $module->content; ?>
		</div>
	</div>
	<?php endif;
} ?>
