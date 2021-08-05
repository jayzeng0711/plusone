<?php

namespace Orm;

use Illuminate\Database\Eloquent\Model;


class NewsModel extends Model {

    protected $connection = 'event-public-api';    
    protected $table = 'vote_logs';
}