<?php

namespace Phpfox\Model;

/**
 * Class GatewayInterface
 *
 * @package Phpfox\Model
 */
interface GatewayInterface
{

    /**
     * GatewayInterface constructor.
     *
     * @param string $collection
     * @param string $modelClass
     * @param string $gatewayId
     * @param string $adapter
     */
    public function __construct(
        $collection,
        $modelClass,
        $gatewayId,
        $adapter
    );

    /**
     * @param mixed $id
     *
     * @return mixed
     * @throws GatewayException
     */
    public function findById($id);

    /**
     * @param array $data
     *
     * @return mixed
     */
    public function insert($data);
}