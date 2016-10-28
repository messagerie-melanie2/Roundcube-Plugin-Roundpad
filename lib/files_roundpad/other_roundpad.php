<?php
/**
 * Plugin Roundpad
 *
 * Other roundpad class
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
 * Class for others files
 *
 * @property string $name Name of the file
 * @property string $type Kind of file
 * @property timestamp $created Date of creation for the file
 * @property string $url Url of the file
 * @property string $owner Owner of the file
 */
class other_roundpad extends file_roundpad
{
  /**
   * Constant type for other
   */
  const TYPE_OTHER = 'other';

  /**
   * Other roundpad constructor
   * Set type to other
   * @param string $json
   */
  public function __construct($json = null) {
    parent::__construct($json);
    $this->setProperty('type', self::TYPE_OTHER);
  }
}