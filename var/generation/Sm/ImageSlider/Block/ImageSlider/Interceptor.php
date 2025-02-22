<?php
namespace Sm\ImageSlider\Block\ImageSlider;

/**
 * Interceptor class for @see \Sm\ImageSlider\Block\ImageSlider
 */
class Interceptor extends \Sm\ImageSlider\Block\ImageSlider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Backend\Block\Template $template, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Catalog\Block\Product\Context $context, array $data = array(), $attr = null)
    {
        $this->___init();
        parent::__construct($objectManager, $template, $resultPageFactory, $context, $data, $attr);
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
