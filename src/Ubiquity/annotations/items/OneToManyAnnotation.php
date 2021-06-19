<?php

namespace Ubiquity\annotations\items;

/**
 * Annotation OneToMany.
 * usage :
 * - oneToMany("mappedBy"=>"memberName","className"=>"classname")
 * - oneToMany("mappedBy"=>"memberName","className"=>"classname","cascade"=>['remove'])
 *
 * @author jc
 * @version 1.0.3
 */
class OneToManyAnnotation extends BaseAnnotation {
	public $mappedBy;
	public $className;
	public $cascade;
}
