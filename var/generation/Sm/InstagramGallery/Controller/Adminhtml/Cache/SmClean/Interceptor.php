<?php
namespace Sm\InstagramGallery\Controller\Adminhtml\Cache\SmClean;

/**
 * Interceptor class for @see \Sm\InstagramGallery\Controller\Adminhtml\Cache\SmClean
 */
class Interceptor extends \Sm\InstagramGallery\Controller\Adminhtml\Cache\SmClean implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Filesystem $filesystem, \Magento\Backend\App\Action\Context $context, \Magento\Framework\Filesystem\Driver\File $driver)
    {
        $this->___init();
        parent::__construct($filesystem, $context, $driver);
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
