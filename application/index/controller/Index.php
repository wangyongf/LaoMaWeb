<?php
namespace app\index\controller;

use think\Loader;
use \traits\controller\Jump;

class Index
{
    public function index()
    {
        $Test = new \my\Test();
        $res = $Test->sayHello();
        return $res;
    }

}
