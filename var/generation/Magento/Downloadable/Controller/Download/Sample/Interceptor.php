<?php
namespace Magento\Downloadable\Controller\Download\Sample;

/**
 * Interceptor class for @see \Magento\Downloadable\Controller\Download\Sample
 */
class Interceptor extends \Magento\Downloadable\Controller\Download\Sample implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Catalog\Model\Product\SalabilityChecker $salabilityChecker = null)
    {
        $this->___init();
        parent::__construct($context, $salabilityChecker);
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
