<?php
/**
 * Created by PhpStorm.
 * User: UramnOIL
 * Date: 2019/03/27
 * Time: 0:38
 */

namespace uramnoil\simpleeconomy;


use pocketmine\IPlayer;
use uramnoil\simpleeconomy\repository\Account;

class AccountFactory {
	public function createAccount(int $id, IPlayer $player, int $money = 0): Account {
		return new Account($id, strtolower($player->getName()), $money);
	}
}