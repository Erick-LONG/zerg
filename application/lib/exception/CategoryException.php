<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/9
 * Time: 22:40
 */

namespace app\lib\exception;


class CategoryException extends BaseException
{
    public $code = 404;
    public $msg = '指定类目不存在，请检查参数';
    public $errorCode = 50000;
}