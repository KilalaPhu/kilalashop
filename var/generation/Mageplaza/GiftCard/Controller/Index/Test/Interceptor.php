<?php
namespace Mageplaza\GiftCard\Controller\Index\Test;

/**
 * Interceptor class for @see \Mageplaza\GiftCard\Controller\Index\Test
 */
class Interceptor extends \Mageplaza\GiftCard\Controller\Index\Test implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory, \Mageplaza\GiftCard\Model\CardFactory $cardFactory, \Magento\Framework\Registry $registry, \Magento\Checkout\Model\Session $session)
    {
        $this->___init();
        parent::__construct($context, $pageFactory, $cardFactory, $registry, $session);
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
