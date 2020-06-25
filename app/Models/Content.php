<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Content
 * @package App\Models
 * @mixin Eloquent
 *
 * @property int id
 * @property string name
 *
 * @property Carbon created_date
 * @property Carbon updated_date
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
