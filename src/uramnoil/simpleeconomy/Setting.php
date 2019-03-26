<?php
/**
 * Created by PhpStorm.
 * User: UramnOIL
 * Date: 2019/03/27
 * Time: 0:16
 */

namespace uramnoil\simpleeconomy;


class Setting {
	/** @var string */
	private $prefixUnit;
	/** @var string */
	private $suffixUnit;
	/** @var int */
	private $defaultMoney;

	/**
	 * Setting constructor.
	 * @param array $setting
	 */
	public function __construct(array $setting) {
		$this->unit = $setting["unit"];
		$this->defaultMoney = $setting["default-money"];
	}

	/**
	 * @return string
	 */
	public function getPrefixUnit(): string {
		return $this->prefixUnit;
	}

	/**
	 * @return string
	 */
	public function getSuffixUnit(): string {
		return $this->suffixUnit;
	}

	/**
	 * @return int
	 */
	public function getDefaultMoney(): int {
		return $this->defaultMoney;
	}
}