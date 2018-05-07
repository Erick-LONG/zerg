<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/5
 * Time: 15:43
 */

namespace app\api\controller\v2;

class Banner
{
    /*
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @id banner的ID号
     * */
    public function getBanner($id){

        return 'this is version v2';

    }
}