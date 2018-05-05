<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/5
 * Time: 18:44
 */

namespace app\api\controller\validate;


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
        $result = $this->check($params);
        if (!$result){
            $error = $this->error;
            throw new Exception($error);
        }
        else{
            return true;
        }
    }
}