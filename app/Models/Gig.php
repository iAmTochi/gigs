<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'Role_id',
        'company_id',
        'country_id',
        'state_id',
        'address',
        'min',
        'max',
    ];


    /**
     * adding the relationship with Tag table
     * a gig has many tags
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags(){

        return $this->belongsToMany(Tag::class);

    }


    /**
     * a gig belongs to role
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role(){

        return  $this->belongsTo(Role::class);
    }
}
