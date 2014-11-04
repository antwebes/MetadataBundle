<?php 

namespace Ant\MetadataBundle\ModelManager;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

abstract class PageManager
{	
	protected $eventDispatcher;
	
	public function __construct(EventDispatcherInterface $eventDispatcher)
	{
		$this->eventDispatcher = $eventDispatcher;

	}
	
}