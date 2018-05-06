<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/5
 * Time: 21:15
 */

namespace app\api\model;


use think\Db;
use think\Model;

class Banner extends Model
{
    public function items(){
        return $this->hasMany('BannerItem','banner_id','id');
    }

    public static function getBannerByID($id){
            $result = Db::table('banner_item')->where('banner_id','=',$id)->select();
        return $result;
 }
}