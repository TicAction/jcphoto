<?php
/**
 * Created by PhpStorm.
 * User: ghislain girard
 * Date: 2016-08-09
 * Time: 08:47
 */

namespace app\Http\ViewComposers;


use App\Config;

class ConfigComposer
{
public function compose($view)
{
//    $view->with('title', Config::latest()->first());
}

}