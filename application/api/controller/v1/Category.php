<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/9
 * Time: 22:30
 */

namespace app\api\controller\v1;
use app\api\model\Category as CategoryModel;
use app\lib\exception\CategoryException;

class Category
{
    public function getAllCategories(){
        $categories = CategoryModel::all([],'img');
        if (!$categories){
            throw new CategoryException();
        }
        return json($categories);
    }
}