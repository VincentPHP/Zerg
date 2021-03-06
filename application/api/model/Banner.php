<?php
/* +----------------------------------------------------------------
 * | Software: [AQPHP framework]
 * |	 Site: www.aqphp.com
 * |----------------------------------------------------------------
 * |   Author: 赵 港 < admin@gzibm.com | 847623251@qq.com >
 * |   WeChat: GZIDCW
 * |   Copyright (C) 2015-2020, www.aqphp.com All Rights Reserved.
 * +----------------------------------------------------------------*/

namespace app\api\model;

/**
 * Banner 模型
 * @package app\api\model
 */
class Banner extends BaseModel
{
    /**
     * @var array 隐藏指定字段
     */
    protected $hidden = ['update_time','delete_time'];


    /**
     * 关联BannerItem模型
     * @return object BannerItem模型对象
     */
    public function items()
    {
        return $this->hasMany('BannerItem', 'banner_id', 'id');
    }


    /**
     * 获取指定Banner数据
     * @param $id 需要获取的Banner ID
     * @return false | array 模型组合的数据
     */
    public static function getBannerByID($id)
    {
        //关联items模型方法
        return self::with(['items', 'items.img'])->find($id);
    }
}