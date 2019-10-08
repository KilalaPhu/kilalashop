<?php
namespace Mageplaza\GiftCard\Controller\Adminhtml\Code\Save;

/**
 * Interceptor class for @see \Mageplaza\GiftCard\Controller\Adminhtml\Code\Save
 */
class Interceptor extends \Mageplaza\GiftCard\Controller\Adminhtml\Code\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Mageplaza\GiftCard\Model\CardFactory $cardFactory, \Magento\Framework\Math\Random $random)
    {
        $this->___init();
        parent::__construct($context, $cardFactory, $random);
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
