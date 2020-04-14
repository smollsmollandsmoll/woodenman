<?php
/**
 * Created by PhpStorm.
 * User: mc
 * Date: 18/4/27
 * Time: 下午4:26
 */

namespace app\admin\model;


use Think\Db;
use think\Exception;
use think\Log;
use think\Model;
class User extends Model
{

    /**
     * 查询身份认证车辆未认证的司机所有司机
     */
    public function driverList(){
        $result = Db::name('user')->field('id,username')->select();
        return $result;
    }

}