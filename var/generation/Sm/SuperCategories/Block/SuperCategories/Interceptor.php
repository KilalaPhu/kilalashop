<?php
namespace Sm\SuperCategories\Block\SuperCategories;

/**
 * Interceptor class for @see \Sm\SuperCategories\Block\SuperCategories
 */
class Interceptor extends \Sm\SuperCategories\Block\SuperCategories implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resourceConnection, \Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Framework\Locale\ResolverInterface $localeResolver, \Magento\Eav\Model\Config $eavConfig, \Magento\Catalog\Block\Product\Context $context, array $data = array(), $attr = null)
    {
        $this->___init();
        parent::__construct($resourceConnection, $objectManager, $localeResolver, $eavConfig, $context, $data, $attr);
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
