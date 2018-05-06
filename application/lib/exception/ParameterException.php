<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/6
 * Time: 14:12
 */

namespace app\lib\exception;


use think\Exception;

class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $error_code = 10000;
}