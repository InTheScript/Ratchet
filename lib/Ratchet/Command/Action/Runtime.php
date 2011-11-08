<?php
namespace Ratchet\Command\Action;
use Ratchet\Command\ActionTemplate;
use Ratchet\SocketObserver;

class Runtime extends ActionTemplate {
    /**
     * @var Closure
     */
    protected $_command = null;

    /**
     * Your closure should accept two parameters (\Ratchet\SocketInterface, \Ratchet\SocketObserver) parameter and return a CommandInterface or NULL
     * @param Closure Your closure/lambda to execute when the time comes
     */
    public function setCommand(\Closure $callback) {
        $this->_command = $callback;
    }

    public function execute(SocketObserver $scope = null) {
        return call_user_func($this->_command, $this->getSocket(), $scope);
    }
}