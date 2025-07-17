<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Certificates extends Model
{
    protected $fillable = [
        'product_name',
        'nickname',
        'location',
        'support_level',
        'support_end_date',
        'status',
        'ip',
        'product_type',
    ];

    public function getDaysRemainingAttribute()
    {
        $today = Carbon::today();
        $expiration = Carbon::parse($this->support_end_date);

        if ($expiration->lessThanOrEqualTo($today)) {
            return 0;
        }

        return $today->diffInDays($expiration);
    }

    public function getStatusAttribute()
    {
        $days = $this->days_remaining;

        if ($days == 0) {
            return 'Expired';        // منتهية
        } elseif ($days <= 7) {
            return 'Nearly Expired'; // على وشك الانتهاء
        } else {
            return 'Active';         // فعالة
        }
    }
}
