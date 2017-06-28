<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Google\AdsApi\Dfp\Util\v201611;

use Google\AdsApi\Dfp\v201611\Date;

/**
 * Static utility methods for working with DFP `Date` objects.
 */
final class DfpDates {

  private function __construct() {}

  /**
   * Returns string representation of the specified DFP date in `yyyy-MM-dd`
   * format.
   *
   * @param Date $dfpDate
   * @return string
   */
  public static function toDateString(Date $dfpDate) {
    return sprintf(
        '%d-%02d-%02d',
        $dfpDate->getYear(),
        $dfpDate->getMonth(),
        $dfpDate->getDay()
    );
  }
}
