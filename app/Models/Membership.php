<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = ['userId', 'communityId', 'joinedAt'];

    public function community()
    {
        return $this->belongsTo(Community::class, 'communityId');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userId'); 
    }


}
