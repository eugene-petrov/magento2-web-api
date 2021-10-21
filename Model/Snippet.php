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
     * @return void
     */
    protected function _construct()
    {
        $this->_init(SnippetResource::class);
    }

    /**
     * @return string[]
     */
    public function getIdentities(): array
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->getData(self::NAME);
    }

    /**
     * @param string $name
     * @return SnippetInterface
     */
    public function setName(string $name): SnippetInterface
    {
        $this->setData(self::NAME, $name);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->getData(self::DESCRIPTION);
    }

    /**
     * @param string $description
     * @return SnippetInterface
     */
    public function setDescription(string $description): SnippetInterface
    {
        $this->setData(self::DESCRIPTION, $description);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * @param string $createdAt
     * @return SnippetInterface
     */
    public function setCreatedAt(string $createdAt): SnippetInterface
    {
        $this->setData(self::CREATED_AT, $createdAt);
        return $this;
    }
}
