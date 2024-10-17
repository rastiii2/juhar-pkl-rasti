<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'guru';
    protected $primaryKey = 'id_guru';

    protected $fillable = [
        'nip',
        'email',
        'password',
        'nama_guru',
        'foto',
    ];

    protected $hidden = [
        'password',
    ];
}
