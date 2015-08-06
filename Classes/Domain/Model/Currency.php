<?php
namespace SJBR\StaticInfoTables\Domain\Model;
/***************************************************************
*  Copyright notice
*
*  (c) 2011-2012 Armin Rüdiger Vieweg <info@professorweb.de>
*  (c) 2013 Stanislas Rolland <typo3(arobas)sjbr.ca>
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
***************************************************************/
/**
 * The Currency model
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Currency extends AbstractEntity {
	/**
	 * Danish name of the currency
	 * @var string
	 */
	protected $nameDa = '';

	/**
	 * Danish name of the currency subdivision unit
	 * @var string
	 */
	protected $subdivisionNameDa = '';

	/**
	 * Sets the Danish name of the currency
	 *
	 * @param string $nameDa
	 *
	 * @return void
	 */
	public function setNameDa($nameDa) {
		$this->nameDa = $nameDa;
	}

	/**
	 * Gets the Danish name of the currency
	 *
	 * @return string
	 */
	public function getNameDa() {
		return $this->nameDa;
	}

	/**
	 * Sets the Danish name of the currency subdivision
	 *
	 * @param string $subdivisionNameDa
	 *
	 * @return void
	 */
	public function setSubdivisionNameDa($subdivisionNameDa) {
		$this->subdivisionNameDa = $subdivisionNameDa;
	}

	/**
	 * Gets the Danish name of the currency subdivision
	 *
	 * @return string
	 */
	public function getSubdivisionNameDa() {
		return $this->subdivisionNameDa;
	}
}
?>