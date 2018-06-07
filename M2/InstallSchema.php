<?php
namespace $NAMESPACE$\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * Installs DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return $this
     */
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context $DEPENDENCY$
    )
    {
        $installer = $setup;

        $installer->startSetup();


        $installer->endSetup();

        return $this;
    }

}
