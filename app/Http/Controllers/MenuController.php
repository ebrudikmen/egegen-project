<?php

namespace App\Http\Controllers;

use App\Http\Requests\Menu\StoreOrUpdateRequest;
use App\Http\Resources\MenuResource;
use App\Models\Menu;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class MenuController extends Controller
{
    /**
     * @param StoreOrUpdateRequest $request
     * @return MenuResource
     */
    public function store(StoreOrUpdateRequest $request): MenuResource
    {
        $attributes = $request->validated();
        $menu = Menu::create($attributes);
        return new MenuResource($menu);
    }

    /**
     * @param Menu $menu
     * @param StoreOrUpdateRequest $request
     * @return MenuResource
     */
    public function update(Menu $menu, StoreOrUpdateRequest $request): MenuResource
    {
        $attributes = $request->validated();
        $menu->update($attributes);
        return new MenuResource($menu);
    }

    /**
     * @param Menu $menu
     * @return MenuResource
     */
    public function show(Menu $menu): MenuResource
    {
        return new MenuResource($menu);
    }

    /**
     * @param Menu $menu
     * @throws Exception
     */
    public function delete(Menu $menu)
    {
        $menu->delete();
    }

    /**
     * @param Request $request
     * @return AnonymousResourceCollection
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        $query = Menu::query();
        $menu = $query->paginate();
        return MenuResource::collection($menu);
    }
}
