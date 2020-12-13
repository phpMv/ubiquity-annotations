<?php
namespace Ubiquity\annotations\php\attributes;

use Ubiquity\annotations\BaseAnnotationTrait;

/**
 * Annotation Database.
 * usages :
 * - #[Database("dbName")]
 * - #[Database(name: "dbName")]
 *
 * Ubiquity\annotations\php\attributes$Database
 * This class is part of Ubiquity
 *
 * @author jc
 * @version 1.0.0
 *
 */
class Database extends BaseAttribute {
	use BaseAnnotationTrait;

	/**
	 *
	 * @var string
	 */
	public $name;

	public function __construct(string $name) {
		$this->name = $name;
	}
}

