<?php

namespace App\Http\Controllers;

use App\Http\Requests\Content\StoreOrUpdateRequest;
use App\Http\Resources\ContentResource;
use App\Models\Content;
use Exception;

class ContentController extends Controller
{
    /**
     * @param StoreOrUpdateRequest $request
     * @return ContentResource
     */
    public function store(StoreOrUpdateRequest $request): ContentResource
    {

        $attributes = $request->validated();

        $content = Content::create($attributes);

        return new ContentResource($content);

    }

    /**
     * @param Content $content
     * @param StoreOrUpdateRequest $request
     * @return ContentResource
     */
    public function update(Content $content, StoreOrUpdateRequest $request): ContentResource
    {
        $attributes = $request->validated();
        $content->update($attributes);
        return new ContentResource($content);
    }


    /**
     * @param Content $content
     * @return ContentResource
     */
    public function show(Content $content): ContentResource
    {
        return new ContentResource($content);
    }

    /**
     * @param Content $content
     * @throws Exception
     */
    public function delete(Content $content)
    {
        $content->delete();

    }
}
