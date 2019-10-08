<?php
namespace Magento\Eav\Model\Entity\Attribute\Backend\Serialized;

/**
 * Interceptor class for @see \Magento\Eav\Model\Entity\Attribute\Backend\Serialized
 */
class Interceptor extends \Magento\Eav\Model\Entity\Attribute\Backend\Serialized implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Unserialize\SecureUnserializer $unserializer = null, \Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($unserializer, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function validate($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        if (!$pluginInfo) {
            return parent::validate($object);
        } else {
            return $this->___callPlugins('validate', func_get_args(), $pluginInfo);
        }
    }
}
