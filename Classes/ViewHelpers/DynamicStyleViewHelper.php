<?php
namespace TYPO3\CMS\InfiniteScrollGallery\ViewHelpers;

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Fabien Udriot
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

/**
 * View helper for inline style.
 */
class DynamicStyleViewHelper extends \Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * Generate a JSON array of images suiting xoyview
	 *
	 * @param array $settings containing images
	 * @return string
	 */
	public function render(array $settings) {

		# Defines width and height values dynamically
		$styles = <<<EOF
<style type="text/css">
.tx-infinitscrollgallery-thumbnail {
	width: {$settings['thumbnailMaximumWidth']}px;
	height: {$settings['thumbnailMaximumHeight']}px;
}
</style>
EOF;

		return $styles;
	}
}
?>