<?php
namespace Ubiquity\annotations\php\attributes\router;

use \Attribute;
use Ubiquity\annotations\BaseAnnotationTrait;
use Ubiquity\annotations\php\attributes\BaseAttribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class Id extends BaseAttribute{
	use BaseAnnotationTrait;
}

