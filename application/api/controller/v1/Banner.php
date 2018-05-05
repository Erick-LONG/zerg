<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/5
 * Time: 15:43
 */

namespace app\api\controller\v1;
use app\api\controller\validate\IDMustBePostiveint;
use app\api\controller\validate\TestValidate;
use think\Validate;


class Banner
{
    /*
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @id banner的ID号
     * */
    public function getBanner($id){
        //独立验证
        //验证器
        (new IDMustBePostiveint())->goCheck();

//        $data = [
//            'id' =>$id
//        ];
//
//        $validate = new IDMustBePostiveint();
//
//        $result = $validate->batch()->check($data);
//
//        var_dump($validate->getError());


    }
}