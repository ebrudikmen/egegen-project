<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

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
    protected $fillable = ["title", "text"];
}
