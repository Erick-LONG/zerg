<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/5
 * Time: 15:43
 */

namespace app\api\controller\v1;
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
        $data = [
            'name' => '',
            'email' => '',
        ];

        $validate = new Validate([
            'name' => 'require|max:10',
            'email' => 'email'
        ]);

        $result = $validate->batch()->check($data);
        var_dump($validate->getError());


    }
}