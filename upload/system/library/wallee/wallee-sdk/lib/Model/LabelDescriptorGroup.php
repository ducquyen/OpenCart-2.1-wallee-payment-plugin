<?php
/**
 * wallee SDK
 *
 * This library allows to interact with the wallee payment service.
 * wallee SDK: 1.0.0
 * 
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Wallee\Sdk\Model;

use Wallee\Sdk\ValidationException;

/**
 * LabelDescriptorGroup model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class LabelDescriptorGroup  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'LabelDescriptorGroup';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'description' => 'map[string,string]',
		'id' => 'int',
		'name' => 'map[string,string]',
		'weight' => 'int'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * 
	 *
	 * @var map[string,string]
	 */
	private $description;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * 
	 *
	 * @var map[string,string]
	 */
	private $name;

	/**
	 * 
	 *
	 * @var int
	 */
	private $weight;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['description'])) {
			$this->setDescription($data['description']);
		}
		if (isset($data['name'])) {
			$this->setName($data['name']);
		}
	}


	/**
	 * Returns description.
	 *
	 * 
	 *
	 * @return map[string,string]
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets description.
	 *
	 * @param map[string,string] $description
	 * @return LabelDescriptorGroup
	 */
	public function setDescription($description) {
		if (is_array($description) && empty($description)) {
			$this->description = new \stdClass;
		} else {
			$this->description = $description;
		}

		return $this;
	}

	/**
	 * Returns id.
	 *
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Sets id.
	 *
	 * @param int $id
	 * @return LabelDescriptorGroup
	 */
	protected function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * 
	 *
	 * @return map[string,string]
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets name.
	 *
	 * @param map[string,string] $name
	 * @return LabelDescriptorGroup
	 */
	public function setName($name) {
		if (is_array($name) && empty($name)) {
			$this->name = new \stdClass;
		} else {
			$this->name = $name;
		}

		return $this;
	}

	/**
	 * Returns weight.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getWeight() {
		return $this->weight;
	}

	/**
	 * Sets weight.
	 *
	 * @param int $weight
	 * @return LabelDescriptorGroup
	 */
	protected function setWeight($weight) {
		$this->weight = $weight;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

	}

	/**
	 * Returns true if all the properties in the model are valid.
	 *
	 * @return boolean
	 */
	public function isValid() {
		try {
			$this->validate();
			return true;
		} catch (ValidationException $e) {
			return false;
		}
	}

	/**
	 * Returns the string presentation of the object.
	 *
	 * @return string
	 */
	public function __toString() {
		if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
			return json_encode(\Wallee\Sdk\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
		}

		return json_encode(\Wallee\Sdk\ObjectSerializer::sanitizeForSerialization($this));
	}

}

