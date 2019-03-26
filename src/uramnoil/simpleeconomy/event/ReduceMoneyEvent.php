<?php
/**
 * Created by PhpStorm.
 * User: UramnOIL
 * Date: 2019/03/27
 * Time: 1:19
 */

namespace uramnoil\simpleeconomy\event;


use pocketmine\event\Cancellable;
use pocketmine\IPlayer;

class ReduceMoneyEvent extends SimpleEconomyEvent implements Cancellable {
	/** @var int */
	private $reduce;

	public function __construct(IPlayer $player, int $reduce) {
		$this->player = $player;
		$this->reduce = $reduce;
	}

	/**
	 * @return int
	 */
	public function getReduce(): int {
		return $this->reduce;
	}

	/**
	 * @param int $reduce
	 */
	public function setReduce(int $reduce): void {
		$this->reduce = $reduce;
	}
}