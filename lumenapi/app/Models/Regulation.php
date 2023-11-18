<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Regulation extends Model
{
 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'regulation';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

/**
* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable = [
'judul', 'isi'
];
/**
* The attributes excluded from the model's JSON form.
*
* @var array
*/
protected $hidden = [];
}