<?php
/**
* @package		Master App
* @author		ZOOlanders http://www.zoolanders.com
* @copyright	Copyright (C) JOOlanders, SL
* @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

/* Render only if there are elements presents on this position and those elements return true on hasValues() function check */
if ($this->checkPosition('top')) : ?>
<div class="pos-top">
	<?php 
	/**
	 * Renders the elements in this position
	 * The style parameters lets you deal with how those will be imploded
	 * you can check the zoo various basic styles, or create your own using the renderer/element folder
	 * For examples, check the com_zoo/renderer/element folder
	 *
	 * defaults: block, comma, default, hypen, inline, list, paragraph, pipe
	 */
	echo $this->renderPosition('top', array('style' => 'stronglabel')); ?>
</div>
<?php endif; ?>

<?php if ($this->checkPosition('title')) : ?>
<h1 class="pos-title"><?php echo $this->renderPosition('title'); ?></h1>
<?php endif; ?>

<div class="content">
	<?php if ($this->checkPosition('media')) : ?>
	<div class="pos-media float-left clearfix">
		<?php echo $this->renderPosition('media', array('style' => 'block')); ?>
	</div>
	<?php endif; ?>

	<?php if ($this->checkPosition('description')) : ?>
	<div class="pos-description">
		<?php echo $this->renderPosition('description', array('style' => 'block')); ?>
	</div>
	<?php endif; ?>
</div>

<?php if ($this->checkPosition('bottom')) : ?>
<div class="pos-bottom clearfix">
	<?php echo $this->renderPosition('bottom', array('style' => 'block')); ?>
</div>
<?php endif; ?>