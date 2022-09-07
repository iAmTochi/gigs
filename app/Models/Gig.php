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


    public function hasTag($tagId){

        return in_array($tagId, $this->tags->pluck('id')->toArray());
    }


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
     * a gig belongs to user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){

        return $this->belongsTo(User::class);

    }


    /**
     * a gig belongs to role
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role(){

        return  $this->belongsTo(Role::class);
    }


    public function company(){

        return  $this->belongsTo(Company::class);
    }

    public function country(){

        return  $this->belongsTo(Country::class);
    }
    public function state(){

        return  $this->belongsTo(State::class);
    }
}
