<?php
/**
 * Created by PhpStorm.
 * User: jessevillafane
 * Date: 9/13/17
 * Time: 10:17 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The database table user by the model
     *
     * @var string
     */
    protected $table = 'messages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'userId',
        'subject',
        'message'
    ];

}