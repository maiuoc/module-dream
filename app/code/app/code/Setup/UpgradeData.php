<?php
 
namespace MST\Dream\Setup;
 
use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use MST\Dream\Model\Product\Type\Dream as DreamType;
 
class UpgradeData implements UpgradeDataInterface
{
	/**
     * EAV setup factory
     *
     * @var EavSetupFactory
     */
    private $eavSetupFactory;

    /**
     * Init
     *
     * @param EavSetupFactory $eavSetupFactory
     */
    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    public function upgrade(
        ModuleDataSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $setup->startSetup();
 
        if (version_compare($context->getVersion(), '1.0.1') < 0) {
            // Get dream_simplenews table
            $tableName = $setup->getTable('dream_simplenews');
            // Check if the table already exists
            if ($setup->getConnection()->isTableExists($tableName) == true) {
                // Declare data
                $data = [
                    [
                        'title' => 'How to create a simple module',
                        'summary' => 'The summary',
                        'description' => 'The description',
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1
                    ],
                    [
                        'title' => 'Create a module with custom database table',
                        'summary' => 'The summary',
                        'description' => 'The description',
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1
                    ]
                ];
 
                // Insert data to table
                foreach ($data as $item) {
                    $setup->getConnection()->insert($tableName, $item);
                }
            }
        }
		if(version_compare($context->getVersion(), '1.0.5') < 0)
		{
			$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
			$attributes = [
					'cost',
					'price',
					'special_price',
					'tax_class_id'
				];
			foreach ($attributes as $attributeCode) {
				$relatedProductTypes = explode(
					',',
					$eavSetup->getAttribute(\Magento\Catalog\Model\Product::ENTITY, $attributeCode, 'apply_to')
				);
				if (!in_array(DreamType::TYPE_CODE, $relatedProductTypes)) {
					$relatedProductTypes[] = DreamType::TYPE_CODE;
					$eavSetup->updateAttribute(
						\Magento\Catalog\Model\Product::ENTITY,
						$attributeCode,
						'apply_to',
						implode(',', $relatedProductTypes)
					);
				}
			}
		}
        $setup->endSetup();
    }
}