<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class FinancialAccount extends Model
{
    //use Authenticatable, Authorizable, HasFactory;

    protected $table = 'financial_account';
    protected $fillable = [
        'nama_akun',
        'no_akun',
        'nama_pemilik',
        'tgl_pembuatan',
        'jenis_akun',
        'status_akun',
        'saldo'
    ];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
