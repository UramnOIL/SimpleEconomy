<?php
/**
 * Created by PhpStorm.
 * User: UramnOIL
 * Date: 2019/03/27
 * Time: 1:32
 */

namespace uramnoil\simpleeconomy\event;


use pocketmine\event\Event;
use pocketmine\IPlayer;

class SimpleEconomyEvent extends Event {
	/** @var IPlayer */
	protected $player;

	/**
	 * @return IPlayer
	 */
	public function getPlayer(): IPlayer {
		return $this->player;
	}
}