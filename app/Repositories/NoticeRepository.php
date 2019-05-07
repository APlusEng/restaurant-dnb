<?php


namespace App\Repositories;

use App\Notice;
use App\Interfaces\NoticeInterface;

class NoticeRepository implements NoticeInterface
{

	private $notice;


	public function __construct(Notice $notice)
	{
		$this->notice = $notice;
	}

	/**
	 * @return mixed
	 */
	public function all()
	{
		return $this->notice->all();
	}

	/**
	 * @param null $perPage
	 * @return mixed
	 */
	public function paginate($perPage = NULL)
	{
		return $this->notice->paginate($perPage);
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function find($id)
	{
		return $this->notice->find($id);
	}

	/**
	 * @param $data
	 * @return mixed
	 */
	public function create($notice)
	{
		return $this->notice->create($notice);
	}

	/**
	 * @param $id
	 * @param $data
	 * @return mixed
	 */
	public function update($id, $notice)
	{
		// TODO: Implement update() method.
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function destroy($id)
	{
		// TODO: Implement destroy() method.
	}
}