<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    //
    protected $fillable = ['name', 'fees', 'air_fees', 'fees_type', 'agent_fees', 'hashFile'];
    
}
