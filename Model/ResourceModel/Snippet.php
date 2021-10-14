<?php

declare(strict_types=1);

namespace Snippet\WebApi\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Snippet extends AbstractDb
{
    const TABLE_NAME = 'snippet_table';

    /**
     * @inheridoc
     */
    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, 'entity_id');
    }
}
