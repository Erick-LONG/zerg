<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/6
 * Time: 13:08
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的Banner不存在';
    public $errorCode = 40000;
}