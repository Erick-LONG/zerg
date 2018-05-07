<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/6
 * Time: 20:34
 */

namespace app\api\model;


use think\Model;

class BannerItem extends BaseModel
{
    protected $hidden =['id','img_id','banner_id','delete_time','update_time'];
    public function img(){
        return $this->belongsTo('Image','img_id','id');
    }
}