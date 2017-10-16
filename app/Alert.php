<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'alerts';
    protected $primaryKey = 'alert_id';
    protected $fillable = [
        'alert_id',
        'alert_name',
        'alert_time',
        'questions_count',
        'time_per_question',
        'teacher_id',
        'subject_id	',
    ];


    public static $create_rules = array(
        'alert_name' => 'required|min:2|max:52|unique:alerts,alert_name',
        'questions_count' => 'required|integer|numeric|between:5,120',
        'time_per_question' => 'required|integer|numeric|between:1,20',
    );
    public static $update_rules = array(
        'alert_name' => 'required|min:2|max:52|unique:alerts,alert_name',
    );

    public function model()
    {
        return $this->belongsTo('Model');
    }

    public function items()
    {
        return $this->hasMany('Item');
    }

}
