<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class News
 * @package App\Models
 * @mixin Eloquent
 * @property int id
 * @property string title
 * @property string text
 * @property int content_id
 * @property int media_id
 *
 * @property Carbon created_date
 * @property Carbon updated_date
 *
 * @property Content content
 * @property Media media
 *
 */
class News extends Model
{
    /**
     * @var string
     */
    protected $table = 'news';

    /**
     * @var array
     */
    protected $fillable = ["title", "text", "content_id", "media_id"];

    /**
     * @return BelongsTo
     */
    public function content()
    {
        return $this->belongsTo(Content::class);
    }

    public function media()
    {
        return $this->hasOne(Media::class);
    }

}
