<?php
namespace Mageplaza\GiftCard\Controller\History\Index;

/**
 * Interceptor class for @see \Mageplaza\GiftCard\Controller\History\Index
 */
class Interceptor extends \Mageplaza\GiftCard\Controller\History\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory, \Mageplaza\GiftCard\Model\ResourceModel\HistoryFactory $historyFactory, \Magento\Framework\Registry $registry)
    {
        $this->___init();
        parent::__construct($context, $pageFactory, $historyFactory, $registry);
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
