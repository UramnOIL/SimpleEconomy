<?php
/**
 * Created by PhpStorm.
 * User: UramnOIL
 * Date: 2019/03/27
 * Time: 0:38
 */

namespace uramnoil\simpleeconomy\repository;


use pocketmine\IPlayer;

class AccountFactory {
	public function createAccount(int $id, IPlayer $player, int $money): Account {
		return new Account($id, strtolower($player->getName()), $money);
	}
}