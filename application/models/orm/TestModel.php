<?php
namespace Orm;

use Illuminate\Database\Eloquent\Model;

/**
* 投票紀錄
*
* @license https://docs.laravel-dojo.com/laravel/5.5/eloquent
*/
class TestModel extends Model
{
    protected $connection = 'event-public-api';    
    protected $table = 'vote_logs';
}
