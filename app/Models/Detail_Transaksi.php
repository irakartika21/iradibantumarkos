<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaksi;

class Detail_transaksi extends Model
{
    use HasFactory;
    protected $table = "detail__transaksis";
    protected $fillable = [
        'id', 'transaksi_id', 'paket_id', 'qty','subtotal'
    ];
    public function outlet()
    {
        return $this->hasOne('App\Models\Outlet', 'id', 'outlet_id');
    }
    public function member()
    {
        return $this->hasOne('App\Models\Member', 'id', 'member_id');
    }
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
    public function paket()
    {
    return $this->belongsTo(Paket::class);
    }

    public function hitungSubtotal()
    {
    return $this->paket->harga * $this->qty;
    }
}