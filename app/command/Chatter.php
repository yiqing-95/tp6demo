<?php
declare (strict_types = 1);

namespace app\command;

use app\common\swoole\WeChat;

use think\console\Command;
use think\console\Input;
use think\console\input\Argument;
use think\console\input\Option;
use think\console\Output;

class Chatter extends Command
{
    protected function configure()
    {
        // 指令配置
        $this->setName('chatter')
            ->setDescription('the chatter command');
    }

    protected function execute(Input $input, Output $output)
    {
        // 指令输出
        $output->writeln('chatter is listening ');
        $ws = new WeChat();

        $server = $ws->getServer();
        $output->writeln("server is listening on: {$server->host}:{$server->port} ");

        $ws->start();
    }
}
