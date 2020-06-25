<?php

namespace App\Http\Controllers;

use App\Http\Requests\Media\StoreOrUpdateRequest;
use App\Http\Resources\MediaResource;
use App\Models\Media;
use Exception;

class MediaController extends Controller
{
    /**
     * @param StoreOrUpdateRequest $request
     * @return MediaResource
     */
    public function store(StoreOrUpdateRequest $request): MediaResource
    {
        $attributes = $request->validated();
        $media = Media::create($attributes);
        return new MediaResource($media);
    }

    /**
     * @param Media $media
     * @param StoreOrUpdateRequest $request
     * @return MediaResource
     */
    public function update(Media $media, StoreOrUpdateRequest $request): MediaResource
    {
        $attributes = $request->validated();
        $media->update($attributes);
        return new MediaResource($media);
    }

    /**
     * @param Media $media
     * @return MediaResource
     */
    public function show(Media $media): MediaResource
    {
        return new MediaResource($media);
    }

    /**
     * @param Media $media
     * @throws Exception
     */
    public function delete(Media $media)
    {
        $media->delete();
    }
}
