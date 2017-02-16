<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function mark(){
    	$this->completed = $this->completed ? false : true;
    	$this->save();
    }
}
