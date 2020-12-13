<?php
namespace Ubiquity\annotations;

use mindplay\annotations\AnnotationCache;
use mindplay\annotations\AnnotationManager;
use mindplay\annotations\Annotations;

class AnnotationsEngine implements AnnotationsInterface {

	/**
	 *
	 * @var array array of annotations name/class
	 */
	protected $registry;

	public function start(string $cacheDirectory): void {
		$this->registry = [
			'id' => 'Ubiquity\annotations\items\IdAnnotation',
			'manyToOne' => 'Ubiquity\annotations\items\ManyToOneAnnotation',
			'oneToMany' => 'Ubiquity\annotations\items\OneToManyAnnotation',
			'manyToMany' => 'Ubiquity\annotations\items\ManyToManyAnnotation',
			'joinColumn' => 'Ubiquity\annotations\items\JoinColumnAnnotation',
			'table' => 'Ubiquity\annotations\items\TableAnnotation',
			'database' => 'Ubiquity\annotations\items\DatabaseAnnotation',
			'transient' => 'Ubiquity\annotations\items\TransientAnnotation',
			'column' => 'Ubiquity\annotations\items\ColumnAnnotation',
			'validator' => 'Ubiquity\annotations\items\ValidatorAnnotation',
			'transformer' => 'Ubiquity\annotations\items\TransformerAnnotation',
			'joinTable' => 'Ubiquity\annotations\items\JoinTableAnnotation',
			'requestMapping' => 'Ubiquity\annotations\items\router\RouteAnnotation',
			'route' => 'Ubiquity\annotations\items\router\RouteAnnotation',
			'get' => 'Ubiquity\annotations\items\router\GetAnnotation',
			'getMapping' => 'Ubiquity\annotations\items\router\GetAnnotation',
			'post' => 'Ubiquity\annotations\items\router\PostAnnotation',
			'postMapping' => 'Ubiquity\annotations\items\router\PostAnnotation',
			'put' => 'Ubiquity\annotations\items\router\PutAnnotation',
			'putMapping' => 'Ubiquity\annotations\items\router\PutAnnotation',
			'patch' => 'Ubiquity\annotations\items\router\PatchAnnotation',
			'patchMapping' => 'Ubiquity\annotations\items\router\PatchAnnotation',
			'delete' => 'Ubiquity\annotations\items\router\DeleteAnnotation',
			'deleteMapping' => 'Ubiquity\annotations\items\router\DeleteAnnotation',
			'options' => 'Ubiquity\annotations\items\router\OptionsAnnotation',
			'optionsMapping' => 'Ubiquity\annotations\items\router\OptionsAnnotation',
			'var' => 'mindplay\annotations\standard\VarAnnotation',
			'yuml' => 'Ubiquity\annotations\items\YumlAnnotation',
			'rest' => 'Ubiquity\annotations\items\rest\RestAnnotation',
			'authorization' => 'Ubiquity\annotations\items\rest\AuthorizationAnnotation',
			'injected' => 'Ubiquity\annotations\items\di\InjectedAnnotation',
			'autowired' => 'Ubiquity\annotations\items\di\AutowiredAnnotation'
		];
		Annotations::$config['cache'] = new AnnotationCache($cacheDirectory . '/annotations');
		self::register(Annotations::getManager());
	}

	public function registerAnnotations(array $nameClasses): void {
		$annotationManager = Annotations::getManager();
		foreach ($nameClasses as $name => $class) {
			$this->registry[$name] = $class;
			$annotationManager->registry[$name] = $class;
		}
	}

	protected function register(AnnotationManager $annotationManager) {
		$annotationManager->registry = \array_merge($annotationManager->registry, $this->registry);
	}

	public function getAnnotsOfClass(string $class, string $annotationType = null): array {
		return Annotations::ofClass($class, $annotationType);
	}

	public function getAnnotationByKey(string $key): ?string {
		if (\array_key_exists($key, $this->registry)) {
			return '@' . $key;
		}
		return null;
	}

	public function getAnnotsOfProperty(string $class, string $property, string $annotationType = null): array {
		return Annotations::ofProperty($class, $property, $annotationType);
	}

	public function getAnnotsOfMethod(string $class, string $method, string $annotationType = null): array {
		return Annotations::ofMethod($class, $method, $annotationType);
	}
}

