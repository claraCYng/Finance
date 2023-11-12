<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Production extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dataproduction';

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