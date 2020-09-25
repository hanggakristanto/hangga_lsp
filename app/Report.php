<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ["user_id", "province_id", "city_id", "request", "description",
     "nama",
    "ttl",
    "request",
    "jk",
    "bangsa",
    "alamat_1",
    "pos_1",
    "tlp_1",
    "mail_1",
    "pend",
    "kerjaan",
    "jabatan",
    "alamat_2",
    "pos_2",
    "tlp_2",
    "mail_2",

    // protected $fillable = ["user_id", "province_id", "city_id", "request", "description", "nama"
];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function province() {
        return $this->belongsTo(Province::class);
    }

    public function city() {
        return $this->belongsTo(City::class);
    }
}
