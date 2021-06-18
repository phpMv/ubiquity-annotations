<?php

namespace Ubiquity\annotations\items;

/**
 * Annotation OneToMany.
 * usage :
 * - oneToMany("mappedBy"=>"memberName","className"=>"classname")
 *
 * @author jc
 * @version 1.0.3
 */
class OneToManyAnnotation extends BaseAnnotation {
	public $mappedBy;
	public $className;
	public $cascade;
}
