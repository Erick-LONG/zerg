<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/7
 * Time: 22:48
 */

namespace app\api\model;


class Theme extends BaseModel
{
    public function topicImg(){
        return $this->belongsTo('Image','topic_img_id','id');

    }

    public function headImg(){
        return $this->belongsTo('Image',"head_img_id",'id');
    }
}