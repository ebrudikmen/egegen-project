<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Media
 * @package App\Models
 * @mixin Eloquent
 *
 * @property int id
 * @property string media_path
 *
 * @property Carbon created_date
 * @property Carbon updated_date
 */
class Media extends Model
{
    /**
     * @var string
     */
    protected $table = 'media';

    /**
     * @var array
     */
    protected $fillable = ["media_path"];
}
