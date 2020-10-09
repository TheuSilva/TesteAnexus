<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Notifications\Notifiable;

class Dependencia extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'antecessor', 'sucessor', 'id',
    ]; 

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'
    ]; 
}
