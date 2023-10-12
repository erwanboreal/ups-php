<?php
/**
 * AddressKeyFormatPoliticalDivision1Test
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\AddressValidation
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Address Validation - Street Level
 *
 * The Address Validation Street Level API can be used to check addresses against the United States Postal Service database of valid addresses in the U.S. and Puerto Rico.
 *
 * OpenAPI spec version: 1.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.45
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace UPS\AddressValidation;

use PHPUnit\Framework\TestCase;

/**
 * AddressKeyFormatPoliticalDivision1Test Class Doc Comment
 *
 * @category    Class
 * @description State/Province.  Returned if the location is within a State/Province/Territory.  For International: returned if user enters valid Country or Territory Code, and City/postal code and it has a match.  For Domestic addresses, the value must be a valid 2-character value (per US Mail standards).  For International the full State or Province name will be returned.
 * @package     UPS\AddressValidation
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AddressKeyFormatPoliticalDivision1Test extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "AddressKeyFormatPoliticalDivision1"
     */
    public function testAddressKeyFormatPoliticalDivision1()
    {
    }
}