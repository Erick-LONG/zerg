<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/6
 * Time: 20:34
 */

namespace app\api\model;


use think\Model;

class BannerItem extends Model
{
    public function img(){
        return $this->belongsTo('Image','img_id','id');
    }
}