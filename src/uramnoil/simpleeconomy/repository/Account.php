<?php
/**
 * Created by PhpStorm.
 * User: UramnOIL
 * Date: 2019/03/26
 * Time: 23:31
 */

namespace uramnoil\simpleeconomy\repository;


class Account {
	/** @var int */
	private $id;
	/** @var string */
	private $name;
	/** @var int */
	private $money;

	public function __construct(int $id, int $name, int $money) {
		$this->id = $id;
		$this->name = $name;
		$this->money = $money;
	}

	/**
	 * @return int
	 */
	public function getId(): int {
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getName(): string {
		return $this->name;
	}

	/**
	 * @param int $money
	 */
	public function setMoney(int $money): void {
		$this->money = $money;
	}

	/**
	 * @return int
	 */
	public function getMoney(): int {
		return $this->money;
	}
}