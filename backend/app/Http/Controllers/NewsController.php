<?php

namespace App\Http\Controllers;

use App\Http\Requests\News\StoreOrUpdateRequest;
use App\Http\Resources\NewsResource;
use App\Models\News;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class NewsController extends Controller
{
    /**
     * @param StoreOrUpdateRequest $request
     * @return NewsResource
     */
    public function store(StoreOrUpdateRequest $request): NewsResource
    {
        $attributes = $request->validated();
        $news = News::create($attributes);
        return new NewsResource($news);
    }

    /**
     * @param News $news
     * @param StoreOrUpdateRequest $request
     * @return NewsResource
     */
    public function update(News $news, StoreOrUpdateRequest $request): NewsResource
    {
        $attributes = $request->validated();
        $news->update($attributes);
        return new NewsResource($news);
    }

    /**
     * @param News $news
     * @return NewsResource
     */
    public function show(News $news): NewsResource
    {
        return new NewsResource($news);
    }

    /**
     * @param News $news
     * @throws Exception
     */
    public function delete(News $news)
    {
        $news->delete();
    }

    /**
     * @param Request $request
     * @return AnonymousResourceCollection
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        $query = News::query();
        $news = $query->paginate();
        return NewsResource::collection($news);
    }
}
