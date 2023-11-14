<?php

namespace App\Models;

use App\Models\Messages;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    // protected $table = 'users';

    protected $fillable = [
        'name',
        'alias',
        'birth',
        'img_path',
    ];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */


    protected $casts = [
        'birth' => 'datetime'
    ];

    public function messages()
    {
        return $this->hasMany(Messages::class);
    }
}
