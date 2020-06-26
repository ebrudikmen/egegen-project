<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
 * @package App\Models
 * @mixin Eloquent
 *
 * @property int id
 * @property string name
 *
 * @property Carbon created_date
 * @property Carbon updated_date
 */
class Menu extends Model
{
    /**
     * @var string
     */
    protected $table = 'menu';

    /**
     * @var array
     */
    protected $fillable = ["name"];
}
