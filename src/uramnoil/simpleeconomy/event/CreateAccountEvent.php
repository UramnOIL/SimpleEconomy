<?php
/**
 * Created by PhpStorm.
 * User: UramnOIL
 * Date: 2019/03/27
 * Time: 1:16
 */

namespace uramnoil\simpleeconomy\event;


use pocketmine\IPlayer;

class CreateAccountEvent extends SimpleEconomyEvent{

	public function __construct(IPlayer $player) {
		$this->player = $player;
	}
}