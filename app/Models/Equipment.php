<?php
/**
 * Created by PhpStorm.
 * User: edgar971
 * Date: 10/14/15
 * Time: 4:20 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Equipment extends Model {
    protected $fillable = ['title', 'description', 'status'];
}