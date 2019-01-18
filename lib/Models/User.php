<?php
/**
 * User
 *
 * PHP version 5
 *
 * @category Class
 * @package  Coachbox\Services\Polar
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
* Polar Accesslink API
 *
* Polar Accesslink API documentation
 *
* OpenAPI spec version: 3.19.0
 * Contact: b2bhelpdesk@polar.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.4
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Coachbox\Services\Polar\Models;

use \ArrayAccess;
use \Coachbox\Services\Polar\ObjectSerializer;

/**
 * User Class Doc Comment
 *
 * @category Class
 * @description User&#x27;s basic information
 * @package  Coachbox\Services\Polar
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class User implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'user';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'polar_user_id' => 'int',
'member_id' => 'string',
'registration_date' => 'string',
'first_name' => 'string',
'last_name' => 'string',
'birthdate' => 'string',
'gender' => 'string',
'weight' => 'float',
'height' => 'float',
'field' => '\Coachbox\Services\Polar\Models\UserExtraInfo[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'polar_user_id' => 'int64',
'member_id' => null,
'registration_date' => null,
'first_name' => null,
'last_name' => null,
'birthdate' => null,
'gender' => null,
'weight' => 'float',
'height' => 'float',
'field' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'polar_user_id' => 'polar-user-id',
'member_id' => 'member-id',
'registration_date' => 'registration-date',
'first_name' => 'first-name',
'last_name' => 'last-name',
'birthdate' => 'birthdate',
'gender' => 'gender',
'weight' => 'weight',
'height' => 'height',
'field' => 'field'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'polar_user_id' => 'setPolarUserId',
'member_id' => 'setMemberId',
'registration_date' => 'setRegistrationDate',
'first_name' => 'setFirstName',
'last_name' => 'setLastName',
'birthdate' => 'setBirthdate',
'gender' => 'setGender',
'weight' => 'setWeight',
'height' => 'setHeight',
'field' => 'setField'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'polar_user_id' => 'getPolarUserId',
'member_id' => 'getMemberId',
'registration_date' => 'getRegistrationDate',
'first_name' => 'getFirstName',
'last_name' => 'getLastName',
'birthdate' => 'getBirthdate',
'gender' => 'getGender',
'weight' => 'getWeight',
'height' => 'getHeight',
'field' => 'getField'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const GENDER_MALE = 'MALE';
const GENDER_FEMALE = 'FEMALE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_MALE,
self::GENDER_FEMALE,        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['polar_user_id'] = isset($data['polar_user_id']) ? $data['polar_user_id'] : null;
        $this->container['member_id'] = isset($data['member_id']) ? $data['member_id'] : null;
        $this->container['registration_date'] = isset($data['registration_date']) ? $data['registration_date'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['birthdate'] = isset($data['birthdate']) ? $data['birthdate'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['field'] = isset($data['field']) ? $data['field'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getGenderAllowableValues();
        if (!in_array($this->container['gender'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gender', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowedValues = $this->getGenderAllowableValues();
        if (!in_array($this->container['gender'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets polar_user_id
     *
     * @return int
     */
    public function getPolarUserId()
    {
        return $this->container['polar_user_id'];
    }

    /**
     * Sets polar_user_id
     *
     * @param int $polar_user_id User's id in Polar database
     *
     * @return $this
     */
    public function setPolarUserId($polar_user_id)
    {
        $this->container['polar_user_id'] = $polar_user_id;

        return $this;
    }

    /**
     * Gets member_id
     *
     * @return string
     */
    public function getMemberId()
    {
        return $this->container['member_id'];
    }

    /**
     * Sets member_id
     *
     * @param string $member_id User's identifier in partner's database
     *
     * @return $this
     */
    public function setMemberId($member_id)
    {
        $this->container['member_id'] = $member_id;

        return $this;
    }

    /**
     * Gets registration_date
     *
     * @return string
     */
    public function getRegistrationDate()
    {
        return $this->container['registration_date'];
    }

    /**
     * Sets registration_date
     *
     * @param string $registration_date Timestamp marked when ACCEPTED
     *
     * @return $this
     */
    public function setRegistrationDate($registration_date)
    {
        $this->container['registration_date'] = $registration_date;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name User's first name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name User's surname
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets birthdate
     *
     * @return string
     */
    public function getBirthdate()
    {
        return $this->container['birthdate'];
    }

    /**
     * Sets birthdate
     *
     * @param string $birthdate User's birthdate as YYYY-MM-DD
     *
     * @return $this
     */
    public function setBirthdate($birthdate)
    {
        $this->container['birthdate'] = $birthdate;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender User's sex
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($gender) && !in_array($gender, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gender', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float $weight User's weight in kg
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets height
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param float $height Users height in centimeters
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets field
     *
     * @return \Coachbox\Services\Polar\Models\UserExtraInfo[]
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
     * Sets field
     *
     * @param \Coachbox\Services\Polar\Models\UserExtraInfo[] $field List containing answers given by the user to a number of partner-specific questions. Extra-info is null if there are no required fields defined by the partner.
     *
     * @return $this
     */
    public function setField($field)
    {
        $this->container['field'] = $field;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
