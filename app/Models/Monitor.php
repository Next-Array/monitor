<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Monitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'url',
        'uptime_check_enabled',
        'look_for_string',
        'uptime_check_interval_in_minutes',
        'uptime_status',
        'uptime_check_failure_reason',
        'uptime_check_times_failed_in_a_row',
        'uptime_status_last_change_date',
        'uptime_last_check_date',
        'uptime_check_failed_event_fired_on_date',
        'uptime_check_method',
        'uptime_check_payload',
        'uptime_check_additional_headers',
        'uptime_check_response_checker',
        'certificate_check_enabled',
        'certificate_status',
        'certificate_expiration_date',
        'certificate_issuer',
        'certificate_check_failure_reason',
    ];
    // protected $table = 'monitors';

    // protected $primaryKey = 'id';

    // protected $keyType = 'int';

    // public $incrementing = true;

    // public $timestamps = true;

    // const CREATED_AT = 'created_at';

    // const UPDATED_AT = 'updated_at';

    // protected $attributes = [
    //     'delayed' => false,
    // ];

    // protected $casts = [
    //     'id' => 'int',
    //     'delayed' => 'boolean',
    // ];

    // protected $dates = [
    //     'created_at',
    //     'updated_at',
    // ];

    // protected $dateFormat = 'Y-m-d H:i:s';

    // protected $appends = [
    //     'is_up',
    // ];

    // protected $with = [
    //     'user',
    // ];

    // protected $hidden = [
    //     'user_id',
    // ];

    // protected $visible = [
    //     'id',
    //     'url',
    // ];

    // protected $fillable = [
    //     'url',
    //     'uptime_check_enabled',
    //     'look_for_string',
    //     'uptime_check_interval_in_minutes',
    //     'uptime_status',
    //     'uptime_check_failure_reason',
    //     'uptime_check_times_failed_in_a_row',
    //     'uptime_status_last_change_date',
    //     'uptime_last_check_date',
    //     'uptime_check_failed_event_fired_on_date',
    //     'uptime_check_method',
    //     'uptime_check_payload',
    //     'uptime_check_additional_headers',
    //     'uptime_check_response_checker',
    //     'certificate_check_enabled',
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
