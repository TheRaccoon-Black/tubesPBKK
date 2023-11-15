<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Akun extends Model
{
    use HasFactory;

    protected $fillable = ['nama_akun', 'tipe_akun', 'perusahaan_id'];

    public static function getTipeAkunOptions()
    {
        return [
            'kas' => 'Kas',
            'utang' => 'Utang',
            'gaji' => 'Gaji',
            'investasi' => 'Investasi',
            'pengeluaran' => 'pengeluaran'
        ];
    }
    public function perusahaan(): BelongsTo
    {
        return $this->belongsTo(Perusahaan::class);
    }
    public function Entri(): HasMany
    {
        return $this->hasMany(Entri::class);
    }

}
