<?php
/**
 * Created by PhpStorm.
 * User: UramnOIL
 * Date: 2019/03/27
 * Time: 1:48
 */

namespace uramnoil\simpleeconomy\event;


use pocketmine\IPlayer;

class DeleteAccountEvent extends SimpleEconomyEvent {
	public function __construct(IPlayer $player) {
		$this->player = $player;
	}
}