<?php
namespace MooPhp\MooInterface\Request;
/**
 * @package MooPhp
 * @author Jonathan Oddy <jonathan at woaf.net>
 * @copyright Copyright (c) 2011, Jonathan Oddy
 */

class UpdatePack extends Request {

	private $_pack;
	private $_packId;

	public function __construct() {
		parent::__construct("moo.pack.updatePack");
	}

	/**
	 * @param \MooPhp\MooInterface\Data\Pack $pack
	 */
	public function setPack($pack) {
		$this->_pack = $pack;
	}

	/**
	 * @param string $packId The pack ID
	 */
	public function setPackId($packId) {
		$this->_packId = $packId;
	}

	public function getPack() {
		return $this->_pack;
	}

	public function getPackId() {
		return $this->_packId;
	}

}
