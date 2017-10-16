<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'models';
    protected $primaryKey = 'model_id';
    protected $fillable = [
        'model_id',
        'model_name',
        'user_id',
    ];

    public static $rules = array(
        'model_name' => 'required|min:2|max:255|unique:models,model_name',
    );

    public function alerts()
    {
        return $this->hasMany('Alert');
    }
}
