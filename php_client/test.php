<?php
/**
 * @author kezh
 * @date   2022/10/25
 * @time   15:24
 *   █████▒█    ██  ▄████▄   ██ ▄█▀       ██████╗ ██╗   ██╗ ██████╗
 * ▓██   ▒ ██  ▓██▒▒██▀ ▀█   ██▄█▒        ██╔══██╗██║   ██║██╔════╝
 * ▒████ ░▓██  ▒██░▒▓█    ▄ ▓███▄░        ██████╔╝██║   ██║██║  ███╗
 * ░▓█▒  ░▓▓█  ░██░▒▓▓▄ ▄██▒▓██ █▄        ██╔══██╗██║   ██║██║   ██║
 * ░▒█░   ▒▒█████▓ ▒ ▓███▀ ░▒██▒ █▄       ██████╔╝╚██████╔╝╚██████╔╝
 *  ▒ ░   ░▒▓▒ ▒ ▒ ░ ░▒ ▒  ░▒ ▒▒ ▓▒       ╚═════╝  ╚═════╝  ╚═════╝
 *  ░     ░░▒░ ░ ░   ░  ▒   ░ ░▒ ▒░
 *  ░ ░    ░░░ ░ ░ ░        ░ ░░ ░
 *           ░     ░ ░      ░  ░
 */

//引入 composer 的自动载加
require __DIR__ . '/vendor/autoload.php';

//用于连接 服务端
$client = new \GPBMetadata\HelloworldClient('127.0.0.1:50051', [
    'credentials' => Grpc\ChannelCredentials::createInsecure()
]);

//实例化 TestRequest 请求类
$request = new \Helloworld\HelloRequest();
$request->setName("kezunhao1");

//调用远程服务
$get = $client->SayHello($request)->wait();

//返回数组
//$reply 是 TestReply 对象
//$status 是数组
list($reply, $status) = $get;

//print_r($reply->getMessage());
print_r($get);exit;


//实例化 TestRequest 请求类
//$request = new \Helloworld\HelloRequest();
//$request->setName("kemingze");
//
////调用远程服务
//$get = $client->SayHelloAgain($request)->wait();
//list($reply, $status) = $get;
//print_r($reply->getMessage());