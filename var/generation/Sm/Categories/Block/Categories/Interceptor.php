<?php
namespace Sm\Categories\Block\Categories;

/**
 * Interceptor class for @see \Sm\Categories\Block\Categories
 */
class Interceptor extends \Sm\Categories\Block\Categories implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resourceConnection, \Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Catalog\Block\Product\Context $context, \Magento\Backend\Block\Template $block, \Magento\Eav\Model\Config $eavConfig, array $data = array(), $attr = null)
    {
        $this->___init();
        parent::__construct($resourceConnection, $objectManager, $context, $block, $eavConfig, $data, $attr);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        if (!$pluginInfo) {
            return parent::getImage($product, $imageId, $attributes);
        } else {
            return $this->___callPlugins('getImage', func_get_args(), $pluginInfo);
        }
    }
}
