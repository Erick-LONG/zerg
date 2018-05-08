<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/8
 * Time: 07:53
 */

namespace app\api\validate;


class IDCollection extends BaseValidate
{
    protected $rule=[
        'ids'=>'require|checkIDs'
    ];

    protected $message =[
        'ids' =>'ids参数必须是以逗号分割的多个正整数'
    ];

    protected function checkIDs($value){
        $values = explode(',',$value);
        if (empty($values)){
            return false;
        }
        foreach ($values as $id){
            if (!$this->isPositiveInterger($id)){
                return false;
            }
        }
        return true;
    }
}