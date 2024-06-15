<?php

//
// Open Web Analytics - An Open Source Web Analytics Framework
//
// Copyright 2006 Peter Adams. All rights reserved.
//
// Licensed under GPL v2.0 http://www.gnu.org/copyleft/gpl.html
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
// $Id$
//

/**
 * OWA Configuration
 * 
 * @author      Peter Adams <peter@openwebanalytics.com>
 * @copyright   Copyright &copy; 2006 Peter Adams <peter@openwebanalytics.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GPL v2.0
 * @category    owa
 * @package     owa
 * @version        $Revision$
 * @since        owa 1.0.0
 */
 
/**
 * DATABASE CONFIGURATION
 *
 * Connection info for databases that will be used by OWA.
 *
 */

define('OWA_DB_TYPE', 'mysql'); // options: mysql
define('OWA_DB_NAME', 'railway'); // name of the database
define('OWA_DB_HOST', 'monorail.proxy.rlwy.net'); // host name of the server housing the database
define('OWA_DB_USER', 'root'); // database user
define('OWA_DB_PORT', '34654'); // port of database
define('OWA_DB_PASSWORD', 'wDylqbdeUHnepyFqEQrtChzADAHJKFzW'); // database user's password

/**
 * AUTHENTICATION KEYS AND SALTS
 *
 * Change these to different unique phrases.
 */
define('OWA_NONCE_KEY', 'a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6');
define('OWA_NONCE_SALT', 'p6o5n4m3l2k1j0i9h8g7f6e5d4c3b2a1');
define('OWA_AUTH_KEY', 'q1w2e3r4t5y6u7i8o9p0a1s2d3f4g5h6');
define('OWA_AUTH_SALT', 'z6x5c4v3b2n1m0l9k8j7h6g5f4d3s2a1');

/**
 * PUBLIC URL
 *
 * Define the URL of OWA's base directory e.g. http://www.domain.com/path/to/owa/
 * Don't forget the slash at the end.
 */
 
define('OWA_PUBLIC_URL', 'https://https://owa-setup-production.up.railway.app/');
// define('OWA_PUBLIC_URL', (getenv('PUBLIC_URL') ?: getenv('RENDER_EXTERNAL_URL')).'/');

/**
 * OWA ERROR HANDLER
 *
 * Overide OWA error handler. This should be done through the admin GUI, but
 * can be handy during install or development.
 * 
 * Choices are:
 *
 * 'production' - will log only critical errors to a log file.
 * 'development' - logs al sorts of useful debug to log file.
 */

//define('OWA_ERROR_HANDLER', 'development');

/**
 * LOG PHP ERRORS
 *
 * Log all php errors to OWA's error log file. Only do this to debug.
 */

//define('OWA_LOG_PHP_ERRORS', true);
 
/**
 * OBJECT CACHING
 *
 * Override setting to cache objects. Caching will increase performance.
 */

//define('OWA_CACHE_OBJECTS', true);

/**
 * CONFIGURATION ID
 *
 * Override to load an alternative user configuration
 */
 
//define('OWA_CONFIGURATION_ID', '1');

?>