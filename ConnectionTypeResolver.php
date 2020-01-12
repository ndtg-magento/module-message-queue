<?php
/**
 * Copyright © NTuanGiang MessageQueue, Inc. All rights reserved.
 */

namespace NTuanGiang\MessageQueue;


class ConnectionTypeResolver extends \Magento\Framework\MessageQueue\ConnectionTypeResolver
{
    /**
     * ConnectionTypeResolver constructor.
     * @param array $resolvers
     */
    public function __construct($resolvers = [])
    {
        parent::__construct($resolvers);
    }

}