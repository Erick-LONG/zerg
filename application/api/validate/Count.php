<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/9
 * Time: 21:55
 */

namespace app\api\validate;


class Count extends BaseValidate
{
    protected $rule = [
        'count' =>'isPositiveInterger|between:1,15'
    ];


}