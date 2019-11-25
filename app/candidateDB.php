<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidateDB extends Model
{
    protected $table = 'candidate';
    protected $primaryKey = 'candidate_id';
    protected $fillable = [
        'appliedposition',
        'profilephoto',
        'nama_lengkap',
        'nama_panggilan',
        'tempat_lahir',
        'tanggal_lahir',
        'NoKtp',
        'NoSim',
        'NoNpwp',
        'NoBpjs',
        'suku',
        'agama',
        'golongandarah',
        'anak_ke',
        'alamatKtp',
        'alamatTinggal',
        'statusrumah',
        'email',
        'noHp',
        'created_by',
        'updated_by'
    ];
}
