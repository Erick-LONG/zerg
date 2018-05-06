<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2018/5/6
 * Time: 13:01
 */

namespace app\lib\exception;


use Exception;
use think\exception\Handle;
use think\Request;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;
    //需要返回客户端当前请求的URL路径

    public function render(Exception $e)
    {
      if ($e instanceof BaseException){
          //如果是自定义异常
          $this->code = $e->code;
          $this->msg = $e->msg;
          $this->errorCode = $e->errorCode;

      }else{
          $this->code = 500;
          $this->msg = '服务器内部错误';
          $this->errorCode =999;

      }
      $result = Request::instance();

      $result = [
          'msg' => $this->msg,
          'error_code' =>$this->errorCode,
          'request_url'=>$result->url()
      ];
      return json($result,$this->code);
    }
}