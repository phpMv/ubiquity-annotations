<?php
namespace Ubiquity\annotations\php\attributes;

use Ubiquity\annotations\BaseAnnotationTrait;
use Attribute;

# [Attribute(Attribute::TARGET_PROPERTY)]
/**
 * Annotation Column.
 * usages :
 * - #[Column("columnName")]
 * - #[Column(name: "columnName")]
 * - #[Column(name: "columnName",nullable: true)]
 * - #[Column(name: "columnName",dbType: "typeInDb")]
 *
 * Ubiquity\annotations\php\attributes$Column
 * This class is part of Ubiquity
 *
 * @author jc
 * @version 1.0.0
 *
 */
class Column extends BaseAttribute {
	use BaseAnnotationTrait;

	public $name;

	public $nullable = false;

	public $dbType;

	public function __construct(string $name, bool $nullable = false, string $dbType = '') {
		$this->name = $name;
		$this->nullable = $nullable;
		$this->dbType = $dbType;
	}
}

