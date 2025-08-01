<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestMongo extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'test_mongo'; // اسم کلکشن در MongoDB
    protected $fillable = ['name', 'email'];
}
