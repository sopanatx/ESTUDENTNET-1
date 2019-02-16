<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checkstd extends Model
{
    protected $table = 'student';
    protected $primaryKey = 'std_id';
   
    public function checkhistory()
    {
         return $this->belongs_to('App\checkhistory');
    }
}
