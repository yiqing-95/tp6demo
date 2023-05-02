<?php

namespace app\common\swoole;

/**
 * @see https://wiki.swoole.com/#/start/start_ws_server
 * @see https://github.com/swoole/swoole-src/tree/master/tests/swoole_websocket_server
 */
class WeChat {
    const HOST = '0.0.0.0';
    const PORT = '9502';
    /**
     * @var \Swoole\WebSocket\Server
     */
    private $ws = null;

    /**
     *
     */
    public function __construct()
    {
        $this->ws = new \Swoole\WebSocket\Server(self::HOST , self::PORT);

        $this->ws->on('open' , [$this , 'open']);
        $this->ws->on('message' , [$this , 'message']);
        $this->ws->on('close' , [$this , 'close']);

    }

    /**
     * @return \Swoole\WebSocket\Server
     */
    public function getServer()
    {
        return $this->ws ;
    }

    public function start()
    {
        $this->ws->start();
    }

    public function open($ws , $request)
    {
        $msg = [
            'userId' => $request->fd,
            'msg' => '欢迎来到离骚实验室',
            'type' => 0,
        ];
        $this->ws->push($request->fd, json_encode($msg));

        $msg = [
            'userCount' => count($ws->connections),
            'type' => 2,
        ];
        foreach ($ws->connections as $fd) {

            $ws->push($fd , json_encode($msg));
        }
    }

    /**
     * @param \Swoole\WebSocket\Server $ws
     * @param \Swoole\WebSocket\Frame $frame
     * @return void
     *
     * @see https://github.com/swoole/swoole-src/tree/master/tests/swoole_websocket_server
     */
    public function message(\Swoole\WebSocket\Server $ws ,\Swoole\WebSocket\Frame $frame)
    {
//        var_dump($ws);
//        var_dump($frame);
        $msg = [
            'userId' => $frame->fd,
            'msg' => $frame->data,
            'type' => 1,
        ];
        foreach ($ws->connections as $fd) {
            if($fd !== $frame->fd){
              $ws->push($fd , json_encode($msg));
            }
        }
    }

    public function close($ws , $fd)
    {

    }
}


