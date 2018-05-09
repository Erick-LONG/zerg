<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/9
 * Time: 21:52
 */

namespace app\api\controller\v1;

use app\api\model\Product as ProductModel;
use app\api\validate\Count;
use app\api\validate\IDMustBePostiveint;
use app\lib\exception\ProductException;

class Product
{
    public function getRecent($count=15){
        (new Count()) ->goCheck();
        $products = ProductModel::getMostRecent($count);
        if (!$products){
            throw new ProductException();
        }
        $collection = collection($products);
        $products = $collection->hidden(['summary']);
        return json($products);
    }

    public function getAllInCategory($id){
        (new IDMustBePostiveint())->goCheck();
        $products = ProductModel::getProductsByCategoryID($id);
        if (!$products){
            throw new ProductException();
        }
        $products = collection($products)->hidden(['summary']);
        return json($products);

    }
}