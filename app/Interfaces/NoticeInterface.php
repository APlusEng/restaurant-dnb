<?php


namespace App\Interfaces;


interface NoticeInterface
{
	/**
	 * @return mixed
	 */
	public function all();

	/**
	 * @param null $perPage
	 * @return mixed
	 */
	public function paginate($perPage = NULL);

	/**
	 * @param $id
	 * @return mixed
	 */
	public function find($id);

	/**
	 * @param $data
	 * @return mixed
	 */
	public function create($data);

	/**
	 * @param $id
	 * @param $data
	 * @return mixed
	 */
	public function update($id, $data);

	/**
	 * @param $id
	 * @return mixed
	 */
	public function destroy($id);
}