<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/5
 * Time: 16:29
 */

namespace app\api\validate;


use think\Validate;

class TestValidate extends Validate
{
    protected $rule=[
        'name' => 'require|max:10',
        'email' => 'email'
    ];
}