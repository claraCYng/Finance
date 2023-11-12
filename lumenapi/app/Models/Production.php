<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Production extends Model
{
/**
* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable = [
'nama_item', 'jumlah_item', 'harga_item'
];
/**
* The attributes excluded from the model's JSON form.
*
* @var array
*/
protected $hidden = [];
}