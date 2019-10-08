<?php
namespace Mageplaza\GiftCard\Controller\Index\Delete;

/**
 * Interceptor class for @see \Mageplaza\GiftCard\Controller\Index\Delete
 */
class Interceptor extends \Mageplaza\GiftCard\Controller\Index\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory, \Mageplaza\GiftCard\Model\CardFactory $cardFactory)
    {
        $this->___init();
        parent::__construct($context, $pageFactory, $cardFactory);
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
