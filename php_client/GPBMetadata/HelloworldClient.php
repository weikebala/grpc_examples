<?php
/**
 * @author kezh
 * @date   2022/10/25
 * @time   14:40
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
namespace GPBMetadata;

class HelloworldClient extends \Grpc\BaseStub
{
    public function __construct($hostname, $opt_params = null, $channel = null)
    {
        parent::__construct($hostname, $opt_params, $channel);
    }

    public function SayHello(\Helloworld\HelloRequest $argument,$metadata=[],$options=[]){
        return $this->_simpleRequest('/helloworld.Greeter/SayHello',
                                     $argument,
                                     [\Helloworld\HelloReply::class, 'decode'],
                                     $metadata, $options);
    }

    public function SayHelloAgain(\Helloworld\HelloRequest $argument,$metadata=[],$options=[]){
        return $this->_simpleRequest('/helloworld.Greeter/SayHelloAgain',
                                     $argument,
                                     [\Helloworld\HelloReply::class, 'decode'],
                                     $metadata, $options);
    }
}