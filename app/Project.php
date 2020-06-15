<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    //
    protected $guarded = [];

    public function path()
    {
        return "/projects/{$this->id}";
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
