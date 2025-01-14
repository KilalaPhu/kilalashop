<?php
namespace Magento\Catalog\Controller\Adminhtml\Product\Widget\Chooser;

/**
 * Interceptor class for @see \Magento\Catalog\Controller\Adminhtml\Product\Widget\Chooser
 */
class Interceptor extends \Magento\Catalog\Controller\Adminhtml\Product\Widget\Chooser implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\RawFactory $resultRawFactory, \Magento\Framework\View\LayoutFactory $layoutFactory, \Magento\Framework\Escaper $escaper = null)
    {
        $this->___init();
        parent::__construct($context, $resultRawFactory, $layoutFactory, $escaper);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
