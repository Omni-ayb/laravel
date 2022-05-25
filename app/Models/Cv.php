<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cv extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates=['deleted_at'];
    
    public function user()
    {
        return $this->BelongsTo('App\Models\User');
    }

    public function experience()
    {
        return $this->hasMany('App\Models\Experience');
    }
}