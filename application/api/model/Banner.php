<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/5
 * Time: 21:15
 */

namespace app\api\model;


use think\Db;

class Banner
{
 public static function getBannerByID($id){
    $result = Db::table('banner_item')->where('banner_id','=',$id)->select();
     return $result;
 }
}