<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasUuids, HasFactory;

    protected $table = "transactions";

    protected $primaryKey = 'uuid';

    const STATUS_PENDING = 'pending';
    const STATUS_CANCEL = 'cancelled';
    const STATUS_SUCCESS = 'success';
    const STATUS_VERIFIED = 'verified';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'user_uuid',
        'patient_uuid',
        'service_date',
        'service_type_uuid',
        'status',
        'total_amount',
    ];
}
