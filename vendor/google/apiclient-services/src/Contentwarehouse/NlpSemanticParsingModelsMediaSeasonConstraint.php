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

namespace Google\Service\Contentwarehouse;

class NlpSemanticParsingModelsMediaSeasonConstraint extends \Google\Model
{
  /**
   * @var int
   */
  public $absoluteIndex;
  protected $evalDataType = NlpSemanticParsingAnnotationEvalData::class;
  protected $evalDataDataType = '';
  public $evalData;
  /**
   * @var string
   */
  public $rawText;
  /**
   * @var int
   */
  public $relativeIndex;

  /**
   * @param int
   */
  public function setAbsoluteIndex($absoluteIndex)
  {
    $this->absoluteIndex = $absoluteIndex;
  }
  /**
   * @return int
   */
  public function getAbsoluteIndex()
  {
    return $this->absoluteIndex;
  }
  /**
   * @param NlpSemanticParsingAnnotationEvalData
   */
  public function setEvalData(NlpSemanticParsingAnnotationEvalData $evalData)
  {
    $this->evalData = $evalData;
  }
  /**
   * @return NlpSemanticParsingAnnotationEvalData
   */
  public function getEvalData()
  {
    return $this->evalData;
  }
  /**
   * @param string
   */
  public function setRawText($rawText)
  {
    $this->rawText = $rawText;
  }
  /**
   * @return string
   */
  public function getRawText()
  {
    return $this->rawText;
  }
  /**
   * @param int
   */
  public function setRelativeIndex($relativeIndex)
  {
    $this->relativeIndex = $relativeIndex;
  }
  /**
   * @return int
   */
  public function getRelativeIndex()
  {
    return $this->relativeIndex;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NlpSemanticParsingModelsMediaSeasonConstraint::class, 'Google_Service_Contentwarehouse_NlpSemanticParsingModelsMediaSeasonConstraint');
