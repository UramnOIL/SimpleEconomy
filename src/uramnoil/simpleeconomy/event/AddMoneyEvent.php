<?php
/**
 * Created by PhpStorm.
 * User: UramnOIL
 * Date: 2019/03/27
 * Time: 1:21
 */

namespace uramnoil\simpleeconomy\event;


use pocketmine\event\Cancellable;
use pocketmine\Player;

class AddMoneyEvent extends SimpleEconomyEvent implements Cancellable {
	/** @var int */
	private $add;

	public function __construct(Player $player, int $add) {
		$this->player = $player;
		$this->add = $add;
	}

	/**
	 * @return int
	 */
	public function getAdd(): int {
		return $this->add;
	}

	/**
	 * @param int $add
	 */
	public function setAdd(int $add): void {
		$this->add = $add;
	}
}