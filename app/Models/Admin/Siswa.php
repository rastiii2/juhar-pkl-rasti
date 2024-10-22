<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';

    protected $fillable = [
        'id_pembimbing',
        'nisn',
        'password',
        'nama_siswa',
        'foto',
    ];

    protected $hidden = [
        'password',
    ];

    public function pembimbingSiswa()
    {
        return $this->belongsTo(Pembimbing::class, 'id_pembimbing', 'id_pembimbing');
    }
}
