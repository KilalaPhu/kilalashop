<?php
namespace Sm\SuperCategories\Controller\Index\Ajax;

/**
 * Interceptor class for @see \Sm\SuperCategories\Controller\Index\Ajax
 */
class Interceptor extends \Sm\SuperCategories\Controller\Index\Ajax implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Framework\View\Layout $layout)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $jsonEncoder, $layout);
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
