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
    public function getName(): ?string;

    /**
     * @param string $name
     * @return SnippetInterface
     */
    public function setName(string $name): SnippetInterface;

    /**
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * @param string $description
     * @return SnippetInterface
     */
    public function setDescription(string $description): SnippetInterface;

    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string;

    /**
     * @param string $createdAt
     * @return SnippetInterface
     */
    public function setCreatedAt(string $createdAt): SnippetInterface;
}
