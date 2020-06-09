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

    /*return one of following greeting message:
"Good morning" if it is after 12am and just before 12pm
"Good afternoon" if it is after 12pm and just before 6pm
"Good evening" if it is after 6pm and just before 12am
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
//        var_dump([$now,$arr]);
        foreach ($arr as $k=> $v){
            if ($now>=$v[0] && $now< $v[1]){
                $greetingMsg = $k;
                break;
            }
        }

        return $greetingMsg;

    }
}