<?php
namespace Magento\SendFriend\Controller\Product\Sendmail;

/**
 * Interceptor class for @see \Magento\SendFriend\Controller\Product\Sendmail
 */
class Interceptor extends \Magento\SendFriend\Controller\Product\Sendmail implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \Magento\SendFriend\Model\SendFriend $sendFriend, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, \Magento\Catalog\Model\Session $catalogSession, \Magento\SendFriend\Model\CaptchaValidator $captchaValidator = null)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $formKeyValidator, $sendFriend, $productRepository, $categoryRepository, $catalogSession, $captchaValidator);
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
