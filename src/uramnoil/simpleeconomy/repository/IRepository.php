<?php
/**
 * Created by PhpStorm.
 * User: UramnOIL
 * Date: 2019/03/26
 * Time: 23:27
 */

namespace uramnoil\simpleeconomy\repository;


interface IRepository {

	/**
	 * @param int $id
	 * @return Account
	 */
	public function findById(int $id): Account;

	/**
	 * 文字列検索は重いのでなるべくIDで検索してください
	 * @param string $name
	 * @return Account
	 */
	public function findByName(string $name): Account;

	/**
	 * @return int
	 */
	public function nextId(): int;

	/**
	 * @return Account[]
	 */
	public function getAll(): array;

	/**
	 * 新しいアカウントを作成します
	 * @param string $name 名前
	 * @return Account
	 */
	public function create(string $name): Account;

	/**
	 * アカウントを削除します
	 * @param Account $account
	 */
	public function remove(Account $account): void;

	/**
	 * データを永続化します
	 * @param Account $account
	 */
	public function store(Account $account): void;
}