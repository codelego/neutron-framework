<?php
/**
 * Created by PhpStorm.
 * User: namnv
 * Date: 11/22/16
 * Time: 4:29 PM
 */

namespace Phpfox\Memcache;


use Phpfox\Session\SaveHandlerInterface;

class MemcacheSessionSaveHandler implements SaveHandlerInterface
{
    public function close()
    {
        // TODO: Implement close() method.
    }

    public function destroy($session_id)
    {
        // TODO: Implement destroy() method.
    }

    public function gc($maxlifetime)
    {
        // TODO: Implement gc() method.
    }

    public function open($save_path, $name)
    {
        // TODO: Implement open() method.
    }

    public function read($session_id)
    {
        // TODO: Implement read() method.
    }

    public function write($session_id, $session_data)
    {
        // TODO: Implement write() method.
    }

}