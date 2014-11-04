<?php 

namespace Ant\MetadataBundle\Repositories;

use Ant\MetadataBundle\Model\Page;

use Doctrine\ORM\EntityRepository;

/**
 * UserManagerDoctrine
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
abstract class PageRepository extends EntityRepository
{
	/**
	 * Constructor
	 * @param $em EntityManager
	 * @param $classMetadata Metadatos de la clase que mapea
	 */
	public function __construct($em){
	
		parent::__construct($em, new ClassMetadata (get_class(new Page())));
	
	}
	
}