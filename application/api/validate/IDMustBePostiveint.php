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

    protected function isPositiveInterger($value,$rule='',$data='',$field=''){
        if(is_numeric($value) && is_int($value+0) && ($value +0)>0){
            return true;
        }
        else{
            return $field.'必须是正整数';
        }

    }

}