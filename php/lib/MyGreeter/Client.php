<?php
namespace MyGreeter;
/**
 * Created by xjj.
 * User: xuejiajia
 * Date: 2020/6/9
 * Time: 11:25 下午
 */

class Client
{

    /*
     *     // Question 2 : according to the left/right limit of each time section ,we have other method to improve or implement
    */
    public function getGreeting(){
        date_default_timezone_set('Asia/Shanghai');
        $greetingMsg = '';
        $now = time() ;

        $arr = [
            "Good morning"=>[
                strtotime(date('Y-m-d 00:00:00',$now)),
                strtotime(date('Y-m-d 12:00:00',$now)),
            ],
            "Good afternoon"=>[
                strtotime(date('Y-m-d 12:00:00',$now)),
                strtotime(date('Y-m-d 18:00:00',$now)),
            ],
            "Good evening"=>[
                strtotime(date('Y-m-d 18:00:00',$now)),
                strtotime(date('Y-m-d 23:59:59',$now)),
            ]
        ];
        foreach ($arr as $k=> $v){
            if ($now>=$v[0] && $now< $v[1]){
                $greetingMsg = $k;
                break;
            }
        }

        return $greetingMsg;

    }
}