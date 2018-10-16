<?php
/**
 * Created by PhpStorm.
 * User: vic
 * Date: 2018/8/25
 * Time: 16:00
 */

global $wj_sp,$dn1_sp,$dn2_sp,$dn3_sp;
global $wj_mp,$dn1_mp,$dn2_mp,$dn3_mp;
global $wj, $dn1, $dn2, $dn3 ,$ad,$pz_copy;
global $chty;
$ad = array();
class others
{
    //新建一个牌组
        public static $paizu_jc = array(
        array('id' => 1, 'class'=>'jc','name' => 'neiqiemei','url'=>'pic\/J\/neiqiemei.jpg'),
        array('id' => 2, 'class'=>'jc','name' => 'DNAlianjiemei','url'=>'pic\/J\/DNAlianjiemei.jpg'),
        array('id' => 3, 'class'=>'jc','name' => 'gujiazaiti','url'=>'pic\/J\/gujiazaiti.jpg'),
        array('id' => 4, 'class'=>'jc','name' => 'mudijiyin','url'=>'pic\/J\/mudijiyin.jpg'),
        array('id' => 5, 'class'=>'jc','name' => 'xijun','url'=>'pic\/J\/xijun.jpg'),
        array('id' => 6, 'class'=>'jc','name' => 'PCR','url'=>'pic\/J\/PCR.jpg'),
    );
        public  static $paizu_gn = array(
        array('id' => 7, 'class'=>'gn','name' => 'shijunti','url'=>'pic/G/shijunti.jpg'),
        array('id' => 8,  'class'=>'gn','name' => 'kangshengsu','url'=>'pic/G/kangshengsu.jpg'),
        array('id' => 9,  'class'=>'gn','name' => 'kangxingjiyin','url'=>'pic/G/kangxingjiyin.jpg'),
        array('id' => 10, 'class'=>'gn','name' => 'gaowen','url'=>'pic/G/gaowen.jpg'),
        array('id' => 11, 'class'=>'gn','name' => 'hesuanshuijiemei','url'=>'pic/G/hesuanshuijiemei.jpg'),
        array('id' => 12, 'class'=>'gn','name' => 'ziwaixian','url'=>'pic/G/ziwaixian.jpg'),
        array('id' => 13, 'class'=>'gn','name' => 'zhuanyi','url'=>'pic/G/zhuanyi.jpg'),
    );

    //打乱二维数组
    public function shuffle_assoc($list)
    {
        if (!is_array($list)) return $list;
        $keys = array_keys($list);
        shuffle($keys);
        $random = array();
        foreach ($keys as $key)
            $random[] = $list[$key];
        return $random;
    }

    //根据key得到一个随机二维数组
    public static function random_erwei($arr1, $arr2){
        //$arr1是一维数组，通过array_random 得到，$arr2是目标数组，即$pz_copy

        $sp = array();
        foreach ($arr1 as $key => $value) {
            $sp[] = $arr2[$value];
            unset($arr2[$value]);
        }
        return $sp;
    }
    // 更新$pz_copy,把玩家的初始手牌从牌组中去除
    public static function update($arr3, $arr4) {
        foreach ($arr3 as $k => $v) {
            foreach ($arr4 as $k1=>$v1){
                if($v['id']==$v1['id']){
                    unset($arr4[$k1]);
                    break;
                }
                continue;
            }
            continue;
        }
        array_merge($arr4);
        return $arr4;
    }
    //基础牌每种7张，共42张；功能牌每种3张，转移2张，噬菌体5张，共22张；共64张；
    public static function pz(){
        $pz = array();
        for ($i = 0; $i <= 5; $i++) {
            for ($j = 0; $j <= 6; $j++) {
                $pz[] = self::$paizu_jc[$i];
            }
        }
        for ($i = 0; $i <= 6; $i++) {
            switch ($i) {
                case 0:
                    for ($j = 0; $j <= 4; $j++) {
                        $pz[] = self::$paizu_gn[0];
                    }
                    break;
                case 6:
                    for ($j = 0; $j <= 1; $j++) {
                        $pz[] = self::$paizu_gn[6];
                    }
                    break;
                default:
                    for ($j = 0; $j <= 2; $j++) {
                        $pz[] = self::$paizu_gn[$i];
                    }
                    break;
            }
        }
        return $pz;
    }

}
//新建一个用户类
class user1 extends others{
    //开始发牌
    public function fenpai(){
        /*要从牌组里获得一张牌，加入手牌，然后判断这张牌，同时，牌组减一*/
        //打印手牌
        global $pz_copy;
        $sp = self::random_erwei(array_rand($pz_copy,6),$pz_copy);//玩家手牌数组
        $pz_copy=self::update($sp,$pz_copy);
        return $sp;
    }
}

class player extends user1 {
    //初始化4个玩家数组
    public function __construct()
    {
        global $wj, $dn1, $dn2, $dn3;
        $wj = array();
        $dn1 = array();
        $dn2 = array();
        $dn3 = array();

    }
    //初始化手牌,一个初始化四个玩家，玩家应该包括手牌，明示牌与玩家标志的属性
    public function init_sp(){
        global $pz_copy;
        $other = new others();
        $pz_copy= $other->shuffle_assoc($other->pz());//创建在对局中使用的牌组
        global $paizhuo;//牌桌
        $paizhuo = array();
        global $wj_sp,$dn1_sp,$dn2_sp,$dn3_sp,$wj,$dn1,$dn2,$dn3,$wj_mp,$dn1_mp,$dn2_mp,$dn3_mp;
        @$wj_sp =user1::fenpai();//玩家手牌

        @$dn1_sp =user1::fenpai();//电脑1的手牌
        //echo count($pz_copy);
//        $dn1[] = $dn1_sp;
        @$dn2_sp = user1::fenpai();
//        $dn2[] = $dn2_sp;
        @$dn3_sp = user1::fenpai();
//        $dn3[] = $dn3_sp;
        foreach ($wj_sp as $key=>$value){
            if (in_array($value ,others::$paizu_jc)&&!in_array($value, $wj_mp)){
                $wj_mp[] = $value;
                unset($wj_sp[$key]);
            }
        }//玩家的明牌
        $wj_sp = array_merge($wj_sp);
//        print_r($wj_sp);
        foreach ($dn1_sp as $key=>$value){
            if (in_array($value ,others::$paizu_jc)&& !in_array($value, $dn1_mp)){
                $dn1_mp[] = $value;
                unset($dn1_sp[$key]);
            }
        }
        $dn1_sp = array_merge($dn1_sp);
        foreach ($dn2_sp as $key=>$value){
            if (in_array($value ,others::$paizu_jc)&&! in_array($value, $dn2_mp)){
                    $dn2_mp[] = $value;
                unset($dn2_sp[$key]);

            }
        }
        $dn2_sp = array_merge($dn2_sp);
        foreach ($dn3_sp as $key=>$value){
            if (in_array($value ,others::$paizu_jc)&&! in_array($value, $dn3_mp)){
                    $dn3_mp[] = $value;
                    unset($dn3_sp[$key]);
            }
        }
        $dn3_sp = array_merge($dn3_sp);
    }
}


@player::init_sp();



?>