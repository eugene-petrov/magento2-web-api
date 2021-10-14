<?php

declare(strict_types=1);

namespace Snippet\WebApi\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Snippet\WebApi\Api\Data\SnippetInterface;

interface SnippetRepositoryInterface
{
    /**
     * @param SnippetInterface $snippet
     * @return \Snippet\WebApi\Api\Data\SnippetInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(SnippetInterface $snippet);

    /**
     * @param int $snippetId
     * @return \Snippet\WebApi\Api\Data\SnippetInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById(int $snippetId);

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Magento\Framework\Api\SearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(SearchCriteriaInterface $searchCriteria);

    /**
     * @param int $snippetId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById(int $snippetId);
}
