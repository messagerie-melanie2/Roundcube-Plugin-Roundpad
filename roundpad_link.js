/**
 * Roundpad plugin
 *
 * @author Thomas Payen <thomas.payen@apitech.fr>
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
$(document).ready(function() {
  $(document).on('click', 'a', function (event) 
	{ 
	   var url = $(this).attr('href');
	   for (var key in rcmail.env.associative_files_url) {
	     if (url.indexOf(key) === 0) {
	       $(this).attr('href', rcmail.url('roundpad/roundpad', {_doc_url: url}).replace('&_action=roundpad', '').replace('&_framed=1', ''));
	     }
	   }
	});
});