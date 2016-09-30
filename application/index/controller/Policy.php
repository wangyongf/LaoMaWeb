<?php
/*
 * Copyright (C) 1996-2016 YONGF Inc.All Rights Reserved.
 * Scott Wang blog.54yongf.com | blog.csdn.net/yongf2014	
 * 文件名：Policy.php @ LaoMaWeb						
 * 描述：
 * 
 * 修改历史
 * 版本号    作者                     日期                    简要描述
 *  1.0         Scott Wang         16-9-30             新增：Create	
 */

namespace app\index\controller;

use \think\Controller;
use \think\Config;

/**
 * 网站声明
 *
 * Class Policy
 * @package app\index\controller
 *
 * @author      Scott Wang
 * @version     1.0, 16-9-30
 * @since         JSC 1.0
 */
class Policy extends Controller
{
    /**
     * 渲染网站声明部分
     *
     * @return mixed
     */
    public function policy()
    {
        $this->assign(Config::get('view_replace_str'));
        return $this->fetch();
    }
}