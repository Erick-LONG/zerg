<?php

namespace app\api\controller\v1;

use app\api\validate\IDCollection;
use app\api\model\Theme as ThemeModel;
use app\api\validate\IDMustBePostiveint;
use app\api\validate\ThemeException;

class Theme
{
    /**
     * @url /theme?ids=id1,id2...
    **/
    public function getSimpleList($ids =''){
        (new IDCollection())->goCheck();
        $ids = explode(',',$ids);
        $result = ThemeModel::with('topicImg,headImg')->select($ids);
        if (!$result){
            throw new ThemeException();
        }
        return json($result);
    }

    /*
     *@url /theme/:id
     * */
    public function getComplexOne($id){

        (new IDMustBePostiveint())->goCheck();
        $theme = ThemeModel::getThemeWithProducts($id);
        if (!$theme){
            throw new ThemeException();
        }
        return $theme;

    }
}
