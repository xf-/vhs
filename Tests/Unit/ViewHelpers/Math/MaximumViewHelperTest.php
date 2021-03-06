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

/**
 * @protection off
 * @author Claus Due <claus@namelesscoder.net>
 * @package Vhs
 */
class MaximumViewHelperTest extends AbstractMathViewHelperTest {

	/**
	 * @test
	 */
	public function testSingleArgument() {
		$this->executeSingleArgumentTest(array(1, 3), 3);
	}

	/**
	 * @test
	 */
	public function testDualArgument() {
		$this->executeDualArgumentTest(4, 2, 4);
	}

	/**
	 * @test
	 */
	public function testDualArgumentBothIterators() {
		$this->executeDualArgumentTest(array(4, 8), array(8, 8), array(8, 8));
	}

}
