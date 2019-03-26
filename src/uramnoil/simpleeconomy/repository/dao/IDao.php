<?php
/**
 * Created by PhpStorm.
 * User: UramnOIL
 * Date: 2019/03/26
 * Time: 23:28
 */

namespace uramnoil\simpleeconomy\repository\dao;


interface IDao {
	/**
	 * @param int $id
	 * @return mixed[]
	 */
	public function selectById(int $id): array;

	/**
	 * @param string $name
	 * @return array
	 */
	public function selectByName(string $name): array;

	/**
	 * @return array[]
	 */
	public function seleceAll(): array;

	/**
	 * @param int $id
	 * @param string $name
	 * @param int $money
	 */
	public function insert(int $id, string $name, int $money = 0): void;

	/**
	 * @param int $id
	 * @param int $money
	 */
	public function update(int $id, int $money): void;

	/**
	 * @param int $id
	 */
	public function delete(int $id): void;
}