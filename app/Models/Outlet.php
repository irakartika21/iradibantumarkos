<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paket;

class Outlet extends Model
{
    use HasFactory;
    protected $table = 'Outlets';
    protected $fillable =['nama', 'alamat', 'telp'];

    public function Paket()
    {
        return $this->belongsTo(Paket::class);
    }
}
