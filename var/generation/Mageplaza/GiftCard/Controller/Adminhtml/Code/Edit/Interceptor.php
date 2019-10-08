<?php
namespace Mageplaza\GiftCard\Controller\Adminhtml\Code\Edit;

/**
 * Interceptor class for @see \Mageplaza\GiftCard\Controller\Adminhtml\Code\Edit
 */
class Interceptor extends \Mageplaza\GiftCard\Controller\Adminhtml\Code\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $registry, \Mageplaza\GiftCard\Model\CardFactory $card)
    {
        $this->___init();
        parent::__construct($resultPageFactory, $context, $registry, $card);
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
