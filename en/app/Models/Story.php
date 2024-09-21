<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Story extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ip_ieit_stories';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
//    protected $dateFormat = 'U';

    /*
     * created_at
     * updated_at
     * */
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // default value
    protected $attributes = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'art_date',
        'tag',
        'content',
        'pic',
        'enabled',
    ];

    public function getCreatedAtAttribute($value)
    {
        $week = array(
            "0" => "星期日",
            "1" => "星期一",
            "2" => "星期二",
            "3" => "星期三",
            "4" => "星期四",
            "5" => "星期五",
            "6" => "星期六"
        );

        $w = $week[date('w', strtotime($value))];

        return date("Y年m月d日$w H:i", strtotime($value));
    }

    public function getImageAttribute()
    {
        return Storage::disk('admin')->url($this->pic);
    }
}
