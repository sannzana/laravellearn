<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalletCredit extends Model
{
    use HasFactory;
    protected $table = 'wallet_credits';
    protected $fillable = [
        'user_id', 'admin_id', 'payment_mode', 'amount', 'payment_status', 'status'
    ];
}
