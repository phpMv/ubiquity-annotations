<?php
namespace Ubiquity\annotations\php\attributes;

use Attribute;
use Ubiquity\annotations\BaseAnnotationTrait;
use Ubiquity\annotations\php\attributes\BaseAttribute;

/**
 * Annotation Id.
 * usage : #[Id]
 *
 * Ubiquity\annotations\php\attributes\router$Id
 * This class is part of Ubiquity
 *
 * @author jc
 * @version 1.0.0
 *
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Id extends BaseAttribute {
	use BaseAnnotationTrait;
}

