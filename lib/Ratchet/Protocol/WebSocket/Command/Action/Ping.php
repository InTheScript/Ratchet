<?php
namespace Ratchet\Protocol\WebSocket\Command\Action;
use Ratchet\Command\ActionTemplate;
use Ratchet\SocketObserver;

class Ping extends ActionTemplate {
    public function execute(SocketObserver $scope = null) {
    }
}