<?php

namespace App;
use Eloquent;

class Role extends Eloquent
{
	const GUEST = 1;
	const GENERAL_SEARCH_AND_REVIEW = 2;
	
    protected $fillable = [
        'name', 'description',
    ];
	
	protected $table = 'role';	
}
