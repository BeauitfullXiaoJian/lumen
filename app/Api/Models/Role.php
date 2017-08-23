<?php

namespace App\Api\Models;

use Illuminate\Database\Eloquent\Model;
use App\Api\Traits\SearchTrait;

class Role extends Model
{
    use SearchTrait;

    protected $table='role';

    protected $fillable = ['id','name','description','permissions'];

    private $search_params = [];    
}
