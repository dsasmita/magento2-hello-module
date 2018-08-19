<?php
namespace Dangs\HelloModule\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	public function execute()
	{
		echo '<h1>Hello Module</h1>';
		echo "<p>congratulation you just create your first module!</p>";
		exit;
	}
}