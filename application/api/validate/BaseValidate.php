<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/5
 * Time: 18:44
 */

namespace app\api\validate;


use app\lib\exception\ParameterException;
use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck(){
        //获取http传入参数
        //对这些参数做校验
        $request = Request::instance();
        $params = $request->param();
        $result = $this->batch()->check($params);
        if (!$result){
            $e = new ParameterException([
                'msg'=>$this->error,
            ]);
            throw $e;
        }
        else{
            return true;
        }
    }

    protected function isPositiveInterger($value,$rule='',$data='',$field=''){
        if(is_numeric($value) && is_int($value+0) && ($value +0)>0){
            return true;
        }
        else{
            return false;
        }

    }

    protected function isNotEmpty($value,$rule='',$data='',$field=''){
        if(empty($value)){
            return false;
        }
        else{
            return true;
        }

    }
}