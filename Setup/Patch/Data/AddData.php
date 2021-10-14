<?php

declare(strict_types=1);

namespace Snippet\WebApi\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\App\ResourceConnection;
use Snippet\WebApi\Model\ResourceModel\Snippet;

class AddData implements DataPatchInterface
{
    /**
     * @var ResourceConnection
     */
    private $resourceConnection;

    /**
     * @param ResourceConnection $resourceConnection
     */
    public function __construct(ResourceConnection $resourceConnection)
    {
        $this->resourceConnection = $resourceConnection;
    }

    /**
     * @inheritDoc
     */
    public function apply()
    {
        $table = $this->resourceConnection->getConnection()->getTableName(Snippet::TABLE_NAME);
        $this->resourceConnection
            ->getConnection()
            ->insertMultiple($table, $this->dataProvider());

        return $this;
    }

    /**
     * @return array
     */
    private function dataProvider(): array
    {
        return [
            [
                'name' => 'entity 1',
                'description' => 'description 1',
            ],
            [
                'name' => 'entity 2',
                'description' => 'description 2',
            ],
            [
                'name' => 'entity 3',
                'description' => 'description 3',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function getAliases()
    {
        return [];
    }
}
