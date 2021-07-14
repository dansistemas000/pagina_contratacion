<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    protected $table = 'permissions';
    protected $primaryKey = 'id';

    protected $guarded =[];

	protected $fillable = [];
}