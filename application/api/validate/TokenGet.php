<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/10
 * Time: 22:31
 */

namespace app\api\validate;


class TokenGet extends BaseValidate
{
    protected $rule=[
        'code' => 'require|isNotEmpty'
    ];
    protected $message =[
        'code' => '需要code才能获取token'
    ];
}