<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checkhistory extends Model
{
    public $table = 'std_history';
    protected $primaryKey = 'std_id';
    public function checkstd()
    {
      return $this->belongs_to(checkstd::class);
    }
}
