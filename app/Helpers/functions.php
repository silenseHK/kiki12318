<?php
/**
 * Created by PhpStorm.
 * User: 27989
 * Date: 2019/4/13
 * Time: 8:58
 */
function returnAjax($status=0,$msg='',$data=[]){
    return exit(json_encode(compact('status','msg','data')));
}