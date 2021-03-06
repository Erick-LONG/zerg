<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/7
 * Time: 22:47
 */

namespace app\api\model;


class Product extends BaseModel
{
    protected $hidden=['delete_time','update_time','topic_img_id','head_img_id','create_time','from','pivot','category_id'];

    public function getMainImgUrlAttr($value,$data){

        return $this->prefixImgUrl($value,$data);
    }

    public static function getMostRecent($count){
        $products = self::limit($count)->order('create_time desc')->select();
        return $products;
    }

    public static function getProductsByCategoryID($categoryID){
        $products = self::where('category_id','=',$categoryID)->select();
        return $products;
    }
}