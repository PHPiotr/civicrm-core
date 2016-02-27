<?php

/*
  +--------------------------------------------------------------------+
  | CiviCRM version 4.7                                                |
  +--------------------------------------------------------------------+
  | Copyright CiviCRM LLC (c) 2004-2015                                |
  +--------------------------------------------------------------------+
  | This file is a part of CiviCRM.                                    |
  |                                                                    |
  | CiviCRM is free software; you can copy, modify, and distribute it  |
  | under the terms of the GNU Affero General Public License           |
  | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
  |                                                                    |
  | CiviCRM is distributed in the hope that it will be useful, but     |
  | WITHOUT ANY WARRANTY; without even the implied warranty of         |
  | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
  | See the GNU Affero General Public License for more details.        |
  |                                                                    |
  | You should have received a copy of the GNU Affero General Public   |
  | License and the CiviCRM Licensing Exception along                  |
  | with this program; if not, contact CiviCRM LLC                     |
  | at info[AT]civicrm[DOT]org. If you have questions about the        |
  | GNU Affero General Public License or the licensing of CiviCRM,     |
  | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
  +--------------------------------------------------------------------+
 */

/**
 * This api exposes CiviCRM Personal Campaign Pages records.
 *
 * @package CiviCRM_APIv3
 */

/**
 * Create or Update a Personal Campaign Page.
 *
 * @param array $params
 *   Array per getfields metadata.
 *
 * @return array
 *   API result array
 */
function civicrm_api3_pcp_create($params) {
  return _civicrm_api3_basic_create('CRM_PCP_BAO_PCP', $params);
}

/**
 * Retrieve a set of Personal Campaign Pages.
 *
 * @param array $params
 *  Input parameters.
 *
 * @return array
 *   Array of Personal Campaign Pages
 */
function civicrm_api3_pcp_get($params) {
  return _civicrm_api3_basic_get('CRM_PCP_BAO_PCP', $params);
}

/**
 * Delete an existing Personal Campaign Page.
 *
 * @param array $params
 */
function civicrm_api3_pcp_delete($params) {
  return _civicrm_api3_basic_delete('CRM_PCP_BAO_PCP', $params);
}
