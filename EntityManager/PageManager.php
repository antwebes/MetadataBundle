<?php

namespace Ant\MetadataBundle\EntityManager;

use Ant\MetadataBundle\Repositories\PageRepository;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

use Doctrine\ORM\EntityManager;

use Ant\MetadataBundle\ModelManager\PageManager as BasePageManager;

class PageManager extends BasePageManager
{	
	/**
	 * @var EntityManager
	 */
	protected $pageRepository;
	
	public function __construct(PageRepository $pageRepository, EventDispatcherInterface $eventDispatcher)
	{
		$this->pageRepository = $pageRepository;
		
		parent::__construct($eventDispatcher);
	}

	public function findPageOneBy($criteria)
	{
		return $this->pageRepository->findOneBy($criteria);
	}
}