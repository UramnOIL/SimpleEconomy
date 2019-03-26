<?php
/**
 * Created by PhpStorm.
 * User: UramnOIL
 * Date: 2019/03/27
 * Time: 1:23
 */

namespace uramnoil\simpleeconomy\event;


use pocketmine\Player;

class SetMoneyEvent extends SimpleEconomyEvent {
	/** @var int */
	private $set;

	public function __construct(Player $player, int $set) {
		$this->player = $player;
		$this->set = $set;
	}

	/**
	 * @return mixed
	 */
	public function getSet() {
		return $this->set;
	}

	/**
	 * @param mixed $set
	 */
	public function setSet($set): void {
		$this->set = $set;
	}
}