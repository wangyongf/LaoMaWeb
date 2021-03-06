<?php
/*
 * Copyright (C) 1996-2016 YONGF Inc.All Rights Reserved.
 * Scott Wang blog.54yongf.com | blog.csdn.net/yongf2014
 * 文件名：Index.php
 * 描述：
 *
 * 修改历史
 * 版本号    作者                     日期                    简要描述
 *  1.0         Scott Wang         16-9-30             新增：Create
 */

namespace app\index\controller;

use \think\Config;
use \think\Controller;

/**
 * 首页控制器
 *
 * @author      Scott Wang
 * @version     1.0, 16-9-30
 * @since         LaoMaWeb 1.0
 */
class Index extends Controller
{
    /**
     * 渲染输出首页
     *
     * @return mixed
     */
    public function index()
    {
        $this->assign(Config::get('view_replace_str'));
        //模板输出
        return $this->fetch();
    }

}
