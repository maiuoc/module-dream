<?php 

namespace MST\Dream\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
class UpgradeSchema implements  UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup,
                            ModuleContextInterface $context){
        $setup->startSetup();
        if (version_compare($context->getVersion(), '1.0.3') < 0) {

            // Get module table
            $tableName = $setup->getTable('dream_simplenews');

            // Check if the table already exists
            if ($setup->getConnection()->isTableExists($tableName) == true) {
                // Declare data
                $columns = [
                    'imagename' => [
                        'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        'nullable' => false,
                        'comment' => 'image name',
                    ],
                ];

                $connection = $setup->getConnection();
                foreach ($columns as $name => $definition) {
                    $connection->addColumn($tableName, $name, $definition);
                }

            }
        }
		if (version_compare($context->getVersion(), '1.0.4') < 0) {
			$tableNameCat = $setup->getTable('dream_simplenews_category');
			if ($setup->getConnection()->isTableExists($tableNameCat) != true) {
				$tableCat = $setup->getConnection()
					->newTable($tableNameCat)
					->addColumn(
						'cait_id',
						\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
						null,
						[
							'identity' => true,
							'unsigned' => true,
							'nullable' => false,
							'primary' => true
						],
						'ID'
					)
					->addColumn(
						'cat_title',
						\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
						null,
						['nullable' => false, 'default' => ''],
						'Cat Title'
					)
					->setComment('News Table')
					->setOption('type', 'InnoDB')
					->setOption('charset', 'utf8');
				$setup->getConnection()->createTable($tableCat);
			}
		}
		 if (version_compare($context->getVersion(), '1.0.6') < 0) {

            // Get module table
            $tableName = $setup->getTable('dream_simplenews');

            // Check if the table already exists
            if ($setup->getConnection()->isTableExists($tableName) == true) {
                // Declare data
                $columns = [
                    'caid_id' => [
                        'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                        'nullable' => false,
                        'comment' => 'Category Id',
                    ],
					'Category Id'
                ];

                $connection = $setup->getConnection();
                foreach ($columns as $name => $definition) {
                    $connection->addColumn($tableName, $name, $definition);
                }

            }
        }
        $setup->endSetup();
    }
}