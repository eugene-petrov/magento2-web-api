<?php

declare(strict_types=1);

namespace Snippet\WebApi\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Snippet extends AbstractDb
{
    const TABLE_NAME = 'snippet_table';

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, 'entity_id');
    }
}
