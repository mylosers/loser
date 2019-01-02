<?php
/**
 * Created by PhpStorm.
 * User: 31916
 * Date: 2018/12/29
 * Time: 9:06
 */

namespace App\Http\Controllers\Order;

use Illuminate\Routing\Controller;

class IndexController extends Controller
{
	
	public $id = 123;

    public function detail()
    {
        echo __METHOD__;
    }

}