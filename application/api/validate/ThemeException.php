<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/8
 * Time: 22:16
 */

namespace app\api\validate;


use app\lib\exception\BaseException;

class ThemeException extends BaseException
{
    public $code =404;
    public $img = '指定主题不存在，请检查主题ID';
    public $errorCode =30000;
}