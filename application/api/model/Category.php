<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/9
 * Time: 22:31
 */

namespace app\api\model;


class Category extends BaseModel
{
    protected $hidden=['delete_time','update_time','create_time'];

    public function img(){
        return $this->belongsTo("Image",'topic_img_id','id');
    }
}