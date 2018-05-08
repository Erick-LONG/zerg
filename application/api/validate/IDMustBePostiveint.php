<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/5
 * Time: 16:47
 */

namespace app\api\validate;


use think\Validate;

class IDMustBePostiveint extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInterger',
    ];

    protected $message=[
        'id'=>'id必须是正整数'
    ];



}