<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;
    public $primaryKey='package_id';
    protected $table="packages";
    protected $fillable = [
        'package_code','package_name','permalink ','package_desc','feature_img','location_id','community_id'
    ];
    public function community(){
        return $this->belongsTo(Community::class,'community_id','community_id');
    }
}
