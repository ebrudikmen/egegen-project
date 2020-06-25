<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Media
 * @package App\Models
 * @mixin Eloquent
 *
 * @property int id
 * @property string media_path
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
