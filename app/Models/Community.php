<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;
    public $primaryKey='community_id';
    protected $table="communities";
    protected $fillable = [
        'community_name','village_id','contact_name','community_desc','community_desc','community_desc','community_logo','created_at','updated_at'
    ];
    public function packages(){
        return $this->hasMany(Packages::class,'community_id','community_id');
    }
}
