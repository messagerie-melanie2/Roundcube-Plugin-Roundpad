# Roundcube-Plugin-Roundpad

Manage your Etherpad and/or Ethercalc documents URL (and any other service URL) from Roundcube in a virtual file system.
This is a kind of bookmarks manager for Roundcube, with special treatment for Etherpad, Ethercalc and others services based on URL (needs little coding to add new services). Links can be stored in folders.
You can share your documents links by e-mail and the plugin automatically finds a document link in a message.

There is no implementation of Etherpad or Ethercalc API, it works only with URL.

This plugin is based on kolab_files plugin. 


Screenshots
-----------

Plugin
![capture d ecran - 28102016 - 11 58 40](https://cloud.githubusercontent.com/assets/3693239/19806927/eec1cf32-9d1d-11e6-9b16-707ca3767698.png)

Create new document
![capture d ecran - 28102016 - 11 59 46](https://cloud.githubusercontent.com/assets/3693239/19806931/fbf725da-9d1d-11e6-8c9b-a9eef87255ad.png)


License
-------

This plugin is released under the GNU Affero General Public License Version 3 (licence of kolab_file plugin)
(http://www.gnu.org/licenses/agpl-3.0.html).


Install
-------

* Rename the plugin folder to roundpad
* Place this plugin folder into plugins directory of Roundcube
* Add roundpad to $config['plugins'] in your Roundcube config


Configuration
-------------

* Create a config.inc.php file based on config.inc.php.dist
* Configure your Etherpad and/or Ethercalc services URL
* You can also add Etherpad and/or Ethercalc URL in 'associative_files_url' property
* If you want to enable URL detections in messages, enable 'roundpad_intercept_click' property


Development
-----------

You can create a new driver to store data (folders and documents URL) in your backend. The data is currently stored in a JSON format in the Roundcube user preferences. If you want to keep JSON format you just have to create a new driver and change _loadData() and _saveData() methods. If you want an other format, you will need a little more code. Driver can be found in lib/driver/roundpad_driver.php file.

You also can add new services (other than Etherpad and Ethercalc), by creating a new class in lib/files_roundpad, this class needs to extends object_roundpad class and has to be called by roundpad_driver.

