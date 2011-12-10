<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Copyright 2011 Spadefoot
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

/**
 * This interface provides the contract for an expression class.
 * 
 * @package Leap
 * @category SQL
 * @version 2011-06-08
 *
 * @see http://en.wikibooks.org/wiki/SQL_Dialects_Reference
 */
interface Base_DB_SQL_Expression_Interface {

	/**
	* This function prepares the specified token as an alias.
	*
	* @access public
	* @param string $expr                       the token string to be prepared
	* @return string                            the prepared token
	*/
	public function prepare_alias($expr);

	/**
	* This function prepares the specified token as a boolean.
	*
	* @access public
	* @param string $expr                       the token string to be prepared
	* @return string                            the prepared token
	*/
	public function prepare_boolean($expr);

	/**
	* This function prepares the specified token as a connector.
	*
	* @access public
	* @param string $expr                       the token string to be prepared
	* @return string                            the prepared token
	*/
	public function prepare_connector($expr);

	/**
	* This function prepares the specified token as an identifier column.
	*
	* @access public
	* @param string $expr                       the token string to be prepared
	* @return string                            the prepared token
	*/
	public function prepare_identifier($expr);

	/**
	* This function prepares the specified token as a join type.
	*
	* @access public
	* @param string $expr                       the token string to be prepared
	* @return string                            the prepared token
	*/
	public function prepare_join($expr);

	/**
	* This function prepares the specified token as a natural number.
	*
	* @access public
	* @param string $expr                       the token string to be prepared
	* @return string                            the prepared token
	*/
	public function prepare_natural($expr);

	/**
	* This function prepares the specified token as a operator.
	*
	* @access public
	* @param string $group                      the operator grouping
	* @param string $expr                       the token string to be prepared
	* @return string                            the prepared token
	*/
	public function prepare_operator($group, $expr);

	/**
	* This function prepares the specified token as a parenthesis.
	*
	* @access public
	* @param string $expr                       the token string to be prepared
	* @return string                            the prepared token
	*/
	public function prepare_parenthesis($expr);

	/**
	* This function prepares the specified token as a value.
	*
	* @access public
	* @param string $expr                       the token string to be prepared
	* @return string                            the prepared token
	*/
	public function prepare_value($expr);

}
?>