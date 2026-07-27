<?php
/**
 * ==========================================================
 * DentalCare Pro v2.0
 * Database Configuration
 * Version: 2.0
 * Author: Wiclif Hirwa & OpenAI
 * ==========================================================
 */

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Database Credentials
|--------------------------------------------------------------------------
*/

define('DB_HOST', 'localhost');
define('DB_NAME', 'dentalcare_pro_v2');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

/*
|--------------------------------------------------------------------------
| Website Settings
|--------------------------------------------------------------------------
*/

define('SITE_NAME', 'DentalCare Pro Dental Clinic');
define('SITE_URL', 'http://localhost/DentalCarePro-v2');

define('TIMEZONE', 'Africa/Kigali');

/*
|--------------------------------------------------------------------------
| Error Reporting
|--------------------------------------------------------------------------
*/

error_reporting(E_ALL);
ini_set('display_errors', '1');

/*
|--------------------------------------------------------------------------
| Timezone
|--------------------------------------------------------------------------
*/

date_default_timezone_set(TIMEZONE);

/*
|--------------------------------------------------------------------------
| Session
|--------------------------------------------------------------------------
*/

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/*
|--------------------------------------------------------------------------
| Database Connection
|--------------------------------------------------------------------------
*/

class Database
{
    private static ?PDO $instance = null;

    public static function connect(): PDO
    {
        if (self::$instance === null) {

            $dsn = "mysql:host=" . DB_HOST .
                   ";dbname=" . DB_NAME .
                   ";charset=" . DB_CHARSET;

            try {

                self::$instance = new PDO(
                    $dsn,
                    DB_USER,
                    DB_PASS,
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::ATTR_EMULATE_PREPARES => false
                    ]
                );

            } catch (PDOException $e) {

                die(
                    "<h2>Database Connection Failed</h2>
                    <p>" . htmlspecialchars($e->getMessage()) . "</p>"
                );

            }
        }

        return self::$instance;
    }
}

/*
|--------------------------------------------------------------------------
| Global Database Variable
|--------------------------------------------------------------------------
*/

$db = Database::connect();