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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1ModelEvaluationSliceSlice extends \Google\Model
{
  /**
   * @var string
   */
  public $dimension;
  protected $sliceSpecType = GoogleCloudAiplatformV1ModelEvaluationSliceSliceSliceSpec::class;
  protected $sliceSpecDataType = '';
  /**
   * @var string
   */
  public $value;

  /**
   * @param string
   */
  public function setDimension($dimension)
  {
    $this->dimension = $dimension;
  }
  /**
   * @return string
   */
  public function getDimension()
  {
    return $this->dimension;
  }
  /**
   * @param GoogleCloudAiplatformV1ModelEvaluationSliceSliceSliceSpec
   */
  public function setSliceSpec(GoogleCloudAiplatformV1ModelEvaluationSliceSliceSliceSpec $sliceSpec)
  {
    $this->sliceSpec = $sliceSpec;
  }
  /**
   * @return GoogleCloudAiplatformV1ModelEvaluationSliceSliceSliceSpec
   */
  public function getSliceSpec()
  {
    return $this->sliceSpec;
  }
  /**
   * @param string
   */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /**
   * @return string
   */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ModelEvaluationSliceSlice::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ModelEvaluationSliceSlice');
