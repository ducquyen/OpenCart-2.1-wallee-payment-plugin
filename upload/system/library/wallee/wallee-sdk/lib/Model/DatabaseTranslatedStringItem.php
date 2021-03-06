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
 * DatabaseTranslatedStringItem model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class DatabaseTranslatedStringItem  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'DatabaseTranslatedStringItem';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'language' => 'string',
		'languageCode' => 'string',
		'translation' => 'string'	);

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
	 * @var string
	 */
	private $language;

	/**
	 * 
	 *
	 * @var string
	 */
	private $languageCode;

	/**
	 * 
	 *
	 * @var string
	 */
	private $translation;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
	}


	/**
	 * Returns language.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getLanguage() {
		return $this->language;
	}

	/**
	 * Sets language.
	 *
	 * @param string $language
	 * @return DatabaseTranslatedStringItem
	 */
	protected function setLanguage($language) {
		$this->language = $language;

		return $this;
	}

	/**
	 * Returns languageCode.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getLanguageCode() {
		return $this->languageCode;
	}

	/**
	 * Sets languageCode.
	 *
	 * @param string $languageCode
	 * @return DatabaseTranslatedStringItem
	 */
	protected function setLanguageCode($languageCode) {
		$this->languageCode = $languageCode;

		return $this;
	}

	/**
	 * Returns translation.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getTranslation() {
		return $this->translation;
	}

	/**
	 * Sets translation.
	 *
	 * @param string $translation
	 * @return DatabaseTranslatedStringItem
	 */
	protected function setTranslation($translation) {
		$this->translation = $translation;

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

