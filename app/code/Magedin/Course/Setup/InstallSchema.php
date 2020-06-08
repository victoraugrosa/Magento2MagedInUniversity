<?php

namespace Magedin\Course\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * Undocumented function
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        /** @var $table */
        $table = $setup->getConnection()->newTable(
            $setup->getTable('magedin_course')
        )->addColumn(
            'id', 
            Table::TYPE_INTEGER,
            null,
            [
                'identity' => true,
                'nullable' => false,
                'primary' => true
            ],
            'Table ID.'
        )->addColumn(
            'name',
            Table::TYPE_TEXT,
            256,
            [
                'nullable' => true
            ],
            'Random name.'
         );

        $setup->getConnection()->createTable($table);
        $setup->endSetup();
    }
}
