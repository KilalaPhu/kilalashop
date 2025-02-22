<?php
namespace Sm\InstagramGallery\Block\InstagramGallery;

/**
 * Interceptor class for @see \Sm\InstagramGallery\Block\InstagramGallery
 */
class Interceptor extends \Sm\InstagramGallery\Block\InstagramGallery implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Catalog\Block\Product\Context $context, array $data = array(), $attr = null)
    {
        $this->___init();
        parent::__construct($objectManager, $context, $data, $attr);
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
