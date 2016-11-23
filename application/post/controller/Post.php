<?php
/*
 * Copyright (C) 1996-2016 YONGF Inc.All Rights Reserved.
 * Scott Wang blog.54yongf.com | blog.csdn.net/yongf2014	
 * 文件名：Post.php @ LaoMaWeb						
 * 描述：
 * 
 * 修改历史
 * 版本号    作者                     日期                    简要描述
 *  1.0         Scott Wang         16-9-30             新增：Create	
 */

namespace app\post\controller;

use \think\Config;
use \think\Controller;

/**
 * 文章控制器
 *
 * Class Post
 * @package app\post\controller
 *
 * @author      Scott Wang
 * @version     1.0, 16-9-30
 * @since         JSC 1.0
 */
class Post extends Controller
{
    public function post()
    {
        $this->assign(Config::get('view_replace_str'));
        return $this->fetch();
    }
}