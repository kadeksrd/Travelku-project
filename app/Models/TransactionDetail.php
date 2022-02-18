<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class TransactionDetail extends Model
{
    //    aktifkan softDelete
    use SoftDeletes;
    use HasFactory;



    // fillable
    protected $fillable =
    [
        'transaction_id', 'username', 'nationality', 'is_visa', 'doe_passport'
    ];

    // protected hidden
    protected $hidden = [];


    // transaction
    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transactions_id', 'id');
    }
}
