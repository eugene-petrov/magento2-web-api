<?php

declare(strict_types=1);

namespace Snippet\WebApi\Model;

use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchResultsInterface;
use Magento\Framework\Exception\AlreadyExistsException;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Snippet\WebApi\Api\SnippetRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Snippet\WebApi\Api\Data\SnippetInterface;
use Snippet\WebApi\Model\ResourceModel\Snippet as SnippetResource;
use Snippet\WebApi\Model\ResourceModel\Snippet\CollectionFactory as SnippetCollectionFactory;
use Magento\Framework\Api\SearchResultsInterfaceFactory;

class SnippetRepository implements SnippetRepositoryInterface
{
    /**
     * @var SnippetResource
     */
    private $snippetResource;

    /**
     * @var SnippetFactory
     */
    private $snippetFactory;

    /**
     * @var SnippetCollectionFactory
     */
    private $snippetCollectionFactory;

    /**
     * @var CollectionProcessorInterface
     */
    private $collectionProcessor;

    /**
     * @var SearchResultsInterfaceFactory
     */
    private $searchResultsFactory;

    public function __construct(
        SnippetResource $snippetResource,
        SnippetFactory $snippetFactory,
        SnippetCollectionFactory $snippetCollectionFactory,
        CollectionProcessorInterface $collectionProcessor,
        SearchResultsInterfaceFactory $searchResultsFactory
    ) {
        $this->snippetResource = $snippetResource;
        $this->snippetFactory = $snippetFactory;
        $this->snippetCollectionFactory = $snippetCollectionFactory;
        $this->collectionProcessor = $collectionProcessor;
        $this->searchResultsFactory = $searchResultsFactory;
    }

    /**
     * @param SnippetInterface $snippet
     * @return SnippetInterface
     * @throws AlreadyExistsException
     */
    public function save(SnippetInterface $snippet): SnippetInterface
    {
        $this->snippetResource->save($snippet);
        return $snippet;
    }

    /**
     * @param int $snippetId
     * @return SnippetInterface
     * @throws NoSuchEntityException
     */
    public function getById(int $snippetId): SnippetInterface
    {
        $snippet = $this->snippetFactory->create();
        $this->snippetResource->load($snippet, $snippetId);

        if (null === $snippet->getId()) {
            throw new NoSuchEntityException(__('No such entity'));
        }

        return $snippet;
    }

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return SearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria): SearchResultsInterface
    {
        $collection = $this->snippetCollectionFactory->create();

        $this->collectionProcessor->process($searchCriteria, $collection);
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());

        return $searchResults;
    }

    /**
     * @param int $snippetId
     * @return bool
     */
    public function deleteById(int $snippetId): bool
    {
        try {
            $snippet = $this->getById($snippetId);
            $this->snippetResource->delete($snippet);
            return true;
        } catch (LocalizedException $e) {
            return false;
        }
    }
}
