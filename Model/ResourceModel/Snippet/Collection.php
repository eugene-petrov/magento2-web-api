<?php

declare(strict_types=1);

namespace Snippet\WebApi\Model\ResourceModel\Snippet;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Snippet\WebApi\Model\ResourceModel\Snippet as SnippetResource;
use Snippet\WebApi\Model\Snippet as SnippetModel;

class Collection extends AbstractCollection
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(SnippetModel::class, SnippetResource::class);
    }
}
