<?php


namespace App\Repositories;

use App\Interfaces\MenuItemInterface;
use App\MenuItem;
use App\Notice;
use App\Interfaces\NoticeInterface;

class MenuItemRepository implements MenuItemInterface
{

	private $menuItem;


	public function __construct(MenuItem $menuItem)
	{
		$this->menuItem = $menuItem;
	}

	/**
	 * @return mixed
	 */
	public function all()
	{
		return $this->menuItem->all();
	}

	/**
	 * @param null $perPage
	 * @return mixed
	 */
	public function paginate($perPage = NULL)
	{
		return $this->menuItem->paginate($perPage);
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function find($id)
	{
		return $this->menuItem->find($id);
	}

	/**
	 * @param $data
	 * @return mixed
	 */
	public function create($menuItem)
	{
		return $this->menuItem->create($menuItem);
	}

	/**
	 * @param $id
	 * @param $data
	 * @return mixed
	 */
	public function update($id, $data)
	{
		$this->menuItem = $this->find($id);
		return $this->menuItem->update($data);
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function destroy($id)
	{
		return $this->menuItem->delete($id);
	}
}