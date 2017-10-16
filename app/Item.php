<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'items';
    protected $primaryKey = 'item_id';
    protected $fillable=[
        'item_id',
        'item_name',
        'user_id',
        'alert_id',
    ];

    public static $rules = array(
        'item_name' => 'required|min:2|max:255',
    );

    public function alert()
    {
        return $this->belongsTo('Alert');
    }

    // public function answers(){
    //     return $this->hasMany('Answer');

    // }
    
}
