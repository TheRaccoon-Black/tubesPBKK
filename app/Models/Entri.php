<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Entri extends Model
{
    use HasFactory;
    protected $fillable = ['transaksi_id', 'akun_id', 'debit', 'kredit'];

    public function transaksi(): BelongsTo
    {
        return $this->belongsTo(Transaksi::class);
    }
    public function akun(): BelongsTo
    {
        return $this->belongsTo(Akun::class);
    }
}
