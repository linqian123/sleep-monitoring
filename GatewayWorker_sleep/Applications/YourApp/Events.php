<?php
/**
 * This file is part of workerman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link http://www.workerman.net/
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */

/**
 * 用于检测业务代码死循环或者长时间阻塞等问题
 * 如果发现业务卡死，可以将下面declare打开（去掉//注释），并执行php start.php reload
 * 然后观察一段时间workerman.log看是否有process_timeout异常
 */
//declare(ticks=1);

use \GatewayWorker\Lib\Gateway;

/**
 * 主逻辑
 * 主要是处理 onConnect onMessage onClose 三个方法
 * onConnect 和 onClose 如果不需要可以不用实现并删除
 */
class Events
{
    /**
     * 当客户端连接时触发
     * 如果业务不需此回调可以删除onConnect
     * 
     * @param int $client_id 连接id
     */
    public static function onConnect($client_id)
    {
        // 向当前client_id发送数据 
        // Gateway::sendToClient($client_id, "Hello\r\n"); 
        // 向所有人发送
        // Gateway::sendToAll("$client_id login\r\n");
        echo "$client_id login\r\n";
    }
    
   /**
    * 当客户端发来消息时触发
    * @param int $client_id 连接id
    * @param mixed $message 具体消息
    */
   public static function onMessage($client_id, $message)
   {	
   	  $db_host = "localhost";
      $db_user = "root";
      $db_pwd = "";
      $db_name = "mattress";
      $conn = mysqli_connect($db_host, $db_user, $db_pwd, $db_name) or die("connect failed!\n");
      mysqli_query($conn, "set names 'utf8'");
      $arr = explode(";",$message);
      $flag = explode(":",$arr[0]);
      if($flag[0] == 'H'){
        $userid = 'qianqian'; 
        $heart = $flag[1];
        $b_flag = explode(":",$arr[1]);
        $breath = $b_flag[1];
        $s_flag = explode(":",$arr[2]);
        $status = $s_flag[1];
        $turnover = 0;
        date_default_timezone_set('PRC'); 
        $datetime = date("Y-m-d H:i:s",strtotime("now"));
        $date = date("Y-m-d",strtotime("now"));
        $sql = "insert into `physical-status`(`userid`,`breath`,`heart`,`turnover`,`status`,`date`,`datetime`) VALUES('$userid','$breath','$heart','$turnover','$status','$date','$datetime')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
      }
   }
   /**
    * 当用户断开连接时触发
    * @param int $client_id 连接id
    */
   public static function onClose($client_id)
   {
       // 向所有人发送 
       // GateWay::sendToAll("$client_id logout\r\n");
   		echo "$client_id logout\r\n";
   }
}
