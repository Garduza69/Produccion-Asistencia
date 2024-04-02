<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\DataPortability\Resource;

use Google\Service\DataPortability\InitiatePortabilityArchiveRequest;
use Google\Service\DataPortability\InitiatePortabilityArchiveResponse;

/**
 * The "portabilityArchive" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dataportabilityService = new Google\Service\DataPortability(...);
 *   $portabilityArchive = $dataportabilityService->portabilityArchive;
 *  </code>
 */
class PortabilityArchive extends \Google\Service\Resource
{
  /**
   * Initiates a new Takeout Archive job for the Portability API.
   * (portabilityArchive.initiate)
   *
   * @param InitiatePortabilityArchiveRequest $postBody
   * @param array $optParams Optional parameters.
   * @return InitiatePortabilityArchiveResponse
   * @throws \Google\Service\Exception
   */
  public function initiate(InitiatePortabilityArchiveRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('initiate', [$params], InitiatePortabilityArchiveResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PortabilityArchive::class, 'Google_Service_DataPortability_Resource_PortabilityArchive');
