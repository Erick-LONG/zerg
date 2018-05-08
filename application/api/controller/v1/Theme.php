<?php

namespace app\api\controller\v1;

use app\api\validate\IDCollection;
use think\Controller;
use think\Request;

class Theme
{
    /**
     * @url /theme?ids=id1,id2...
    **/
    public function getSimpleList($ids=''){
        (new IDCollection())->goCheck();
    }
}
