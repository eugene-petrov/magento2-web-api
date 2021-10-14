<?php

declare(strict_types=1);

namespace Snippet\WebApi\Api\Data;

interface SnippetInterface
{
    const ENTITY_ID = 'entity_id';
    const NAME = 'name';
    const DESCRIPTION = 'description';
    const CREATED_AT = 'created_at';

    /**
     * @return int|null
     */
    public function getEntityId();

    /**
     * @param int $entityId
     * @return SnippetInterface
     */
    public function setEntityId(int $entityId);

    /**
     * @return string|null
     */
    public function getName();

    /**
     * @param string $name
     * @return SnippetInterface
     */
    public function setName(string $name);

    /**
     * @return string|null
     */
    public function getDescription();

    /**
     * @param string $description
     * @return SnippetInterface
     */
    public function setDescription(string $description);

    /**
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * @param string $createdAt
     * @return SnippetInterface
     */
    public function setCreatedAt(string $createdAt);
}
