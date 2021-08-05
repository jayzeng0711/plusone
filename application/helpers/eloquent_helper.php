<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* CodeIgniter Eloquent Database Setting Library
*
* A library to auto setting database config
*
* @license https://www.jianshu.com/p/13a6aa044c42
*/

use Illuminate\Database\Capsule\Manager as Capsule;

$runtimeDb = APPPATH . 'config/' . ENVIRONMENT . '/database.php';
$defaultDb = APPPATH . 'config/database.php';

if (is_file($runtimeDb)) {
    require $runtimeDb;
} else {
    if (is_file($defaultDb)) {
        require $defaultDb;
    } else {
        exit('No database config file be found');
    }
}

$capsule = new Capsule;

$ciToEloquentKeyMap = [
    'hostname' => 'host',
    'username' => 'username',
    'password' => 'password',
    'database' => 'database',
    'dbdriver' => 'driver',
    'dbprefix' => 'prefix',
    'char_set' => 'charset',
    'dbcollat' => 'collation',
    'stricton' => 'strict',
];
foreach ($db as $k => $v) {
    $t = [];
    if (!isset($v['char_set']) or $v['char_set'] != 'utf8') {
        $v['char_set'] = 'utf8';
    }
    foreach ($v as $mm => $nn) {
        if (isset($ciToEloquentKeyMap[$mm])) {
            $t[$ciToEloquentKeyMap[$mm]] = $nn;
        } else {
            $t[$mm] = $nn;
        }
    }
    $t['driver'] = 'mysql';
    $capsule->addConnection($t, $k);
}


$capsule->setAsGlobal();

$capsule->bootEloquent();

?>