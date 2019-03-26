<?php
/**
 * Created by PhpStorm.
 * User: UramnOIL
 * Date: 2019/03/27
 * Time: 0:47
 */

namespace uramnoil\simpleeconomy;


use uramnoil\simpleeconomy\repository\RepositoryException;

class StringResourceMap {
	/** @var string[] */
	private $strings;

	public function __construct(array $strings) {
		$this->strings = $strings;
	}

	public function getString(string $key, ?array $param = null, bool $exception = false): string {
		if($exception && isset($this->strings[$key])) {
			throw new RepositoryException($key . "というキーはありません");
		}

		$string = $this->strings[$key];

		if(count($param) > 0) {
			foreach($param as $key => $replace) {
				$string = str_replace("%" . $key . "%", $replace, $string);
			}
		}

		return $string;
	}
}