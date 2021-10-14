<?php

declare(strict_types=1);

namespace Snippet\WebApi\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use Snippet\WebApi\Api\Data\SnippetInterface;
use Snippet\WebApi\Model\ResourceModel\Snippet as SnippetResource;

class Snippet extends AbstractModel implements IdentityInterface, SnippetInterface
{
    const CACHE_TAG = 'snippet_data';

    /**
     * @inheridoc
     */
    protected function _construct()
    {
        $this->_init(SnippetResource::class);
    }

    /**
     * @inheridoc
     */
    public function getIdentities(): array
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * @inheridoc
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * @inheridoc
     */
    public function setName(string $name)
    {
        $this->setData(self::NAME, $name);
        return $this;
    }

    /**
     * @inheridoc
     */
    public function getDescription()
    {
        return $this->getData(self::DESCRIPTION);
    }

    /**
     * @inheridoc
     */
    public function setDescription(string $description)
    {
        $this->setData(self::DESCRIPTION, $description);
        return $this;
    }

    /**
     * @inheridoc
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * @inheridoc
     */
    public function setCreatedAt(string $createdAt)
    {
        $this->setData(self::CREATED_AT, $createdAt);
        return $this;
    }
}
