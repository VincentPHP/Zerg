<?php
/* +----------------------------------------------------------------
 * | Software: [AQPHP framework]
 * |	 Site: www.aqphp.com
 * |----------------------------------------------------------------
 * |   Author: 赵 港 < admin@gzibm.com | 847623251@qq.com >
 * |   WeChat: GZIDCW
 * |   Copyright (C) 2015-2020, www.aqphp.com All Rights Reserved.
 * +----------------------------------------------------------------*/

namespace app\lib\exception;

/**
 * ParameterException 通用错误异常类
 * @package app\lib\exception
 */
class ParameterException extends BaseException
{
    //状态码
    public $code = 400;

    //错误提示信息
    public $msg  = '参数错误';

    //错误码
    public $errorCode = 10000;

}