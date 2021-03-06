<?php


namespace Iksula\Carriercodetelephone\Plugin\Customer\Account;

class CreatePost
{

    /**
     * @var \Magento\Framework\UrlInterface
     */
    protected $url;

    /**
     * @param \Magento\Framework\UrlInterface $url
     */
    public function __construct(
        \Magento\Framework\UrlInterface $url
    )
    {
        $this->url = $url;
    }

    public function afterExecute(
        \Magento\Customer\Controller\Account\CreatePost $subject,
        $resultRedirect
    ) {
        $resultRedirect->setUrl($this->url->getUrl('customer/account/login'));
        return $resultRedirect;
    }
}