<?php
class Image extends Model
{
  
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = ['image', 'brand'];
}
?>