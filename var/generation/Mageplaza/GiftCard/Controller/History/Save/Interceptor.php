<?php
namespace Mageplaza\GiftCard\Controller\History\Save;

/**
 * Interceptor class for @see \Mageplaza\GiftCard\Controller\History\Save
 */
class Interceptor extends \Mageplaza\GiftCard\Controller\History\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Mageplaza\GiftCard\Model\CardFactory $cardFactory, \Magento\Framework\View\Result\PageFactory $pagefactory, \Magento\Customer\Model\Session $session, \Mageplaza\GiftCard\Model\HistoryFactory $historyFactory, \Magento\Customer\Model\CustomerFactory $customerFactory, \Magento\Customer\Model\ResourceModel\Customer $resourcemodel)
    {
        $this->___init();
        parent::__construct($context, $cardFactory, $pagefactory, $session, $historyFactory, $customerFactory, $resourcemodel);
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
