<?php
namespace Ratchet;

/**
 * Observable/Observer design pattern interface for handing events on a socket
 */
interface SocketObserver {
    /**
     * When a new connection is opened it will be passed to this method
     * @param SocketInterface
     * @return Ratchet\Command\CommandInterface|null
     */
    function onOpen(SocketInterface $conn);

    /**
     * Triggered when a client sends data through the socket
     * @param SocketInterface
     * @param string
     * @return Ratchet\Command\CommandInterface|null
     */
    function onRecv(SocketInterface $from, $msg);

    /**
     * This is called just before the connection is closed
     * @param SocketInterface
     * @return Ratchet\Command\CommandInterface|null
     * @todo This is triggered if the client or server terminates the connection; consider a new onDisconnect if server triggered
     */
    function onClose(SocketInterface $conn);
}