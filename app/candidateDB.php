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
        'kota_domisili',
        'pendidikan',
        'kelamin',
        'NoKtp',
        'NoSim',
        'NoNpwp',
        'NoBpjs',
        'suku', 'agama',
        'golongandarah',
        'anak_ke',
        'alamatKtp',
        'alamatTinggal',
        'statusrumah',
        'email',
        'noHp',
        'filecv',
        'info_lowongan',
        'income',
        'req_datein',
        'fasilitas',
        'ktpfile',
        'simfile',
        'statusinterview'
    ];
    public function getAvatar()
    {
        if (!$this->profilephoto) {
            return asset('file/default.jpg');
        }
        return asset('file/img' . $this->profilephoto);
    }
}
