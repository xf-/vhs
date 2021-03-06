<?php
namespace FluidTYPO3\Vhs\Tests\Unit\ViewHelpers\Math;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Claus Due <claus@namelesscoder.net>
 *
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

use FluidTYPO3\Vhs\Tests\Unit\ViewHelpers\AbstractViewHelperTest;

/**
 * @protection off
 * @author Claus Due <claus@namelesscoder.net>
 * @package Vhs
 */
abstract class AbstractMathViewHelperTest extends AbstractViewHelperTest {

	/**
	 * @param mixed $a
	 * @param mixed $expected
	 * @return void
	 */
	protected function executeSingleArgumentTest($a, $expected) {
		$result = $this->executeViewHelper(array('a' => $a));
		$this->assertEquals($expected, $result);
	}

	/**
	 * @param mixed $a
	 * @param mixed $b
	 * @param mixed $expected
	 * @return void
	 */
	protected function executeDualArgumentTest($a, $b, $expected) {
		$result = $this->executeViewHelper(array('a' => $a, 'b' => $b));
		$this->assertEquals($expected, $result);
	}

}
