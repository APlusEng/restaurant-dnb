<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuItemAddRequest;
use App\MenuItem;
use App\Repositories\MenuItemRepository;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
	protected $model;

	public function __construct(MenuItem $menuItem)
	{
		$this->model = new MenuItemRepository($menuItem);
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$menuItems = $this->model->all();
		return view('admin.menu-item.index', compact('menuItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.menu-item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuItemAddRequest $request)
    {
        $data = $request->validated();
		$menuItem = $this->model->create($data);
		return redirect()->route('admin.menu-item.index')->with(['message' => 'Menu Item Added Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->model->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$menuItem = $this->model->find($id);
		return view('admin.menu-item.edit', compact('menuItem'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	$menuItem = $request->except('_token', '_method');
		$this->model->update($id, $menuItem);
		return redirect()->route('admin.menu-item.index')->with(['message' => 'Menu Item Updated Successfully']);

	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
