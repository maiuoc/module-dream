<?php
namespace MST\Dream\Observer\Adminhtml;
use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\RequestInterface;
use MST\Dream\Model\NewsFactory;
class SaveProductData implements ObserverInterface
{
	protected $request;
	protected $_modelNewsFactory;
	public function __construct(
				RequestInterface $request,
				NewsFactory $modelNewsFactory
			)
    {
        $this->request = $request;
		$this->_modelNewsFactory = $modelNewsFactory;
    }
	/* 
	* test function save another table when saving product
	* @params $posts
	* @return $this
	*/
    public function execute(EventObserver $observer)
    {
		$posts = $this->request->getPost();
		
		if(isset($posts['test_field']) && $posts['test_field'] != '')
		{
			$newsModel = $this->_modelNewsFactory->create();
			$newsModel->setTitle($posts['test_field'])->setId(6)->save();
		}
		return $this;
    }
}
