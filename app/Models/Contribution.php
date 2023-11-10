<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contribution extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_count',
        'value',
        'unit_id',
        'customer_storage_id',
        'user_id',
    ];
    public function unit()
    {
        return $this->belongsTo(MeasurementUnit::class);
    }
    public function customerStorage()
    {
        return $this->belongsTo(CustomerStorage::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
