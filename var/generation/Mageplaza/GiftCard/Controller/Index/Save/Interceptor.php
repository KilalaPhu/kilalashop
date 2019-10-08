<?php
namespace Mageplaza\GiftCard\Controller\Index\Save;

/**
 * Interceptor class for @see \Mageplaza\GiftCard\Controller\Index\Save
 */
class Interceptor extends \Mageplaza\GiftCard\Controller\Index\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Mageplaza\GiftCard\Model\CardFactory $cardFactory, \Magento\Framework\View\Result\PageFactory $pagefactory, \Magento\Framework\Math\Random $random)
    {
        $this->___init();
        parent::__construct($context, $cardFactory, $pagefactory, $random);
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
