<?php
namespace Ubiquity\annotations\php\attributes\router;

use Attribute;
use Ubiquity\annotations\BaseAnnotationTrait;
use Ubiquity\annotations\php\attributes\BaseAttribute;

# [Attribute(Attribute::TARGET_PROPERTY)]
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
class Id extends BaseAttribute {
	use BaseAnnotationTrait;
}

