<?php
/**
 * Plugin Roundpad
 *
 * Driver to handle etherpad or ethercalc links
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

class roundcube_roundpad extends roundpad_driver
{
  /**
   * Save data to storage
   */
  protected function _saveData() {
    if ($this->hasChanged) {
      return rcmail::get_instance()->user->save_prefs(array('roundpad_data' => $this->data));
    }
    return true;
  }
  /**
   * Load data from the storage
   */
  protected function _loadData() {
    $this->data = rcmail::get_instance()->config->get('roundpad_data', null);
    return true;
  }
}