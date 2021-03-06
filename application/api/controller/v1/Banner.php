<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/5
 * Time: 15:43
 */

namespace app\api\controller\v1;
use app\api\validate\IDMustBePostiveint;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;
use think\Exception;

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

        $banner = BannerModel::getBannerByID($id);

        if (!$banner){
            throw new BannerMissException();
        }
        $c = config('setting.img_prefix');
        return $banner;

    }
}