<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Content
 * @package App\Models
 * @mixin Eloquent
 *
 * @property int id
 * @property string name
 *
 *

 */
class Content extends Model
{
    /**
     * @var string
     */
    protected $table = 'content';
    /**
     * @var array
     */
    protected $fillable = ["name"];
}
