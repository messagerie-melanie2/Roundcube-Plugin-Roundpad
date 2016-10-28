<?php
/**
 * Plugin Roundpad
 *
 * Ethercalc class
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Class for ethercalc files
 *
 * @property string $name Name of the file
 * @property string $type Kind of file
 * @property timestamp $created Date of creation for the file
 * @property string $url Url of the file
 * @property string $owner Owner of the file
 */
class Ethercalc extends file_roundpad
{
  /**
   * Constant type for ethercalc
   */
  const TYPE_ETHERCALC = 'ethercalc';

  /**
   * Ethercalc constructor
   * Set type to ethercalc
   * @param string $json
   */
  public function __construct($json = null) {
    parent::__construct($json);
    $this->setProperty('type', self::TYPE_ETHERCALC);
  }
  /**
   * Generate an ethercalc URL based on the name
   * @param string $name
   * @return string
   */
  public static function GenerateURL($name) {
    $ethercalc_url = rcmail::get_instance()->config->get('ethercalc_url');
    $user_name = base64_encode('user:'.ucwords(str_replace('.', ' ', rcmail::get_instance()->get_user_name())));
    $name = urlencode($name);
    return $ethercalc_url . $name . '_' . uniqid() . '_' . $user_name;
  }
}