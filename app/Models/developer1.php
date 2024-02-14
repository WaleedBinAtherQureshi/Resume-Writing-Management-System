<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class developer1 extends Model
{
    use HasFactory;
    protected $table = "developer1";
    protected $primarykey = "id";

    protected $fillable = ['request_type', 'request_id', 'user_file'];

    // Register the creating event to update request_id before saving
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Concatenate request_type with a random number and store it in request_id
            if (!$model->request_id) {
                $randomNumber = mt_rand(1000, 9999);
                $model->request_id = $model->request_type . "-" . $randomNumber;
            }
        });

        static::updating(function ($model) {
            // Check if request_id is not set, then concatenate request_type with a new random number and update request_id
            if ($model->isDirty('request_type')) {
                $randomNumber = mt_rand(1000, 9999);
                $model->request_id = $model->request_type . "-" . $randomNumber;
            }
        });
    }
}
