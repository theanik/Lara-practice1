<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //Fillable Example
   // protected $fillable = ['name','email','status'];

   //Gurded Example
   protected $guarded = [];
   // name will exist with database name
//    protected $attributes = [
//        'Active' => 1
//    ];
   public function getStatusAttribute($attribute){
    return $this->statusOpt()[$attribute];
    }
    public function scopeActive($query){
        return $query->where('status',1);
    }
    public function scopeUnactive($query){
        return $query->where('status',0);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function statusOpt(){
       return [
            1=>'Active',
            0=>'Unactive',
            2=>'In-progress'
       ];
    }
}
