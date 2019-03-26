<?php
/**
 * Created by PhpStorm.
 * User: UramnOIL
 * Date: 2019/03/27
 * Time: 0:17
 */

namespace uramnoil\simpleeconomy;


use \ReflectionException;

use pocketmine\IPlayer;

use uramnoil\simpleeconomy\event\CreateAccountEvent;
use uramnoil\simpleeconomy\repository\AccountFactory;
use uramnoil\simpleeconomy\repository\IRepository;
use uramnoil\simpleeconomy\repository\SimpleEconomyException;

class SimpleEconomy {
	/** @var IRepository */
	private $repository;
	/** @var Setting */
	private $setting;
	/** @var AccountFactory */
	private $factory;

	public function __construct(IRepository $repository, Setting $setting, AccountFactory $factory) {
		$this->repository = $repository;
		$this->setting = $setting;
		$this->factory = $factory;
	}

	/**
	 * @return Setting
	 */
	public function getSetting(): Setting {
		return $this->setting;
	}

	/**
	 * @param IPlayer $player
	 * @param int|null $default 最初に持たせる金額です nullの場合はSetting::$defaultMoneyを使います
	 * @throws SimpleEconomyException|ReflectionException
	 */
	public function createAccount(IPlayer $player, ?int $default = null): void{
		if($this->accountExists($player)) {
			throw new SimpleEconomyException($player->getName());
		}

		$event = new CreateAccountEvent($player);
		$event->call();

		$account = $this->factory->createAccount($this->repository->nextId(), $player, $default ?? $this->getSetting()->getDefaultMoney());
		$this->repository->store($account);
	}

	/**
	 * @param IPlayer $player
	 * @throws SimpleEconomyException|ReflectionException
	 */
	public function deleteAccount(IPlayer $player): void {
		if(!$this->accountExists($player)) {
			throw new SimpleEconomyException($player->getName());
		}

		$event = new CreateAccountEvent($player);
		$event->call();

		$account = $this->factory->createAccount($this->repository->nextId(), $player, $default ?? $this->getSetting()->getDefaultMoney());
		$this->repository->store($account);
	}

	/**
	 * @param IPlayer $player
	 * @return bool
	 */
	public function accountExists(IPlayer $player): bool {
		return $this->repository->findByName(strtolower($player->getName())) !== null;
	}

	/**
	 * @param IPlayer $player
	 * @return int
	 * @throws SimpleEconomyException
	 */
	public function getMoney(IPlayer $player): int {
	}

	/**
	 * @param IPlayer $player
	 * @throws SimpleEconomyException
	 */
	public function setMoney(IPlayer $player): void {

	}

	/**
	 * @param IPlayer $player
	 * @throws SimpleEconomyException
	 */
	public function addMoney(IPlayer $player): void {

	}

	/**
	 * @param IPlayer $player
	 * @throws SimpleEconomyException
	 */
	public function reduceMoney(IPlayer $player): void {

	}
}