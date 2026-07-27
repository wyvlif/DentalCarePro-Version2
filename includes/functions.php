<?php
/**
 * ==========================================================
 * DentalCare Pro v2.0
 * Global Helper Functions
 * Version: 2.0
 * ==========================================================
 */

declare(strict_types=1);

require_once __DIR__ . '/../backend/config.php';

/*
|--------------------------------------------------------------------------
| Sanitize User Input
|--------------------------------------------------------------------------
*/
function clean(string $data): string
{
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

/*
|--------------------------------------------------------------------------
| Redirect
|--------------------------------------------------------------------------
*/
function redirect(string $url): void
{
    header("Location: $url");
    exit;
}

/*
|--------------------------------------------------------------------------
| Flash Messages
|--------------------------------------------------------------------------
*/
function setFlash(string $type, string $message): void
{
    $_SESSION['flash'] = [
        'type' => $type,
        'message' => $message
    ];
}

function getFlash(): ?array
{
    if (!isset($_SESSION['flash'])) {
        return null;
    }

    $flash = $_SESSION['flash'];
    unset($_SESSION['flash']);

    return $flash;
}

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/
function isLoggedIn(): bool
{
    return isset($_SESSION['user_id']);
}

function requireLogin(): void
{
    if (!isLoggedIn()) {

        setFlash("error", "Please login first.");

        redirect("../login.php");
    }
}

/*
|--------------------------------------------------------------------------
| Roles
|--------------------------------------------------------------------------
*/
function requireRole(string $role): void
{
    requireLogin();

    if ($_SESSION['role'] !== $role) {

        setFlash("error", "Access denied.");

        redirect("../login.php");
    }
}

/*
|--------------------------------------------------------------------------
| Generate Appointment Number
|--------------------------------------------------------------------------
*/
function appointmentNumber(): string
{
    return "APT-" .
        date("Ymd") .
        "-" .
        strtoupper(substr(bin2hex(random_bytes(3)),0,6));
}

/*
|--------------------------------------------------------------------------
| Generate Patient Number
|--------------------------------------------------------------------------
*/
function patientNumber(): string
{
    return "PAT-" .
        date("Y") .
        "-" .
        strtoupper(substr(bin2hex(random_bytes(3)),0,6));
}

/*
|--------------------------------------------------------------------------
| Date Format
|--------------------------------------------------------------------------
*/
function formatDate(string $date): string
{
    return date("d M Y", strtotime($date));
}

/*
|--------------------------------------------------------------------------
| Date & Time
|--------------------------------------------------------------------------
*/
function formatDateTime(string $datetime): string
{
    return date("d M Y h:i A", strtotime($datetime));
}

/*
|--------------------------------------------------------------------------
| Password Helpers
|--------------------------------------------------------------------------
*/
function hashPassword(string $password): string
{
    return password_hash($password, PASSWORD_DEFAULT);
}

function verifyPassword(string $password, string $hash): bool
{
    return password_verify($password, $hash);
}

/*
|--------------------------------------------------------------------------
| CSRF Protection
|--------------------------------------------------------------------------
*/
function csrfToken(): string
{
    if (empty($_SESSION['csrf_token'])) {

        $_SESSION['csrf_token'] =
            bin2hex(random_bytes(32));
    }

    return $_SESSION['csrf_token'];
}

function csrfField(): string
{
    return '<input type="hidden"
            name="csrf_token"
            value="' . csrfToken() . '">';
}

function verifyCSRF(): void
{
    if (
        !isset($_POST['csrf_token']) ||
        !hash_equals(
            $_SESSION['csrf_token'],
            $_POST['csrf_token']
        )
    ) {

        die("Invalid CSRF Token.");
    }
}

/*
|--------------------------------------------------------------------------
| Upload Validation
|--------------------------------------------------------------------------
*/
function allowedImage(string $filename): bool
{
    $allowed = [
        'jpg',
        'jpeg',
        'png',
        'webp'
    ];

    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    return in_array($ext, $allowed);
}

/*
|--------------------------------------------------------------------------
| Email Validation
|--------------------------------------------------------------------------
*/
function validEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/*
|--------------------------------------------------------------------------
| Phone Validation
|--------------------------------------------------------------------------
*/
function validPhone(string $phone): bool
{
    return preg_match('/^[0-9+\-\s]{8,20}$/', $phone);
}

/*
|--------------------------------------------------------------------------
| Random String
|--------------------------------------------------------------------------
*/
function randomString(int $length = 10): string
{
    return substr(
        bin2hex(random_bytes($length)),
        0,
        $length
    );
}

/*
|--------------------------------------------------------------------------
| Dashboard Statistics
|--------------------------------------------------------------------------
*/

function countTable(PDO $db, string $table): int
{
    $allowedTables = [
        'appointments',
        'patients',
        'users',
        'services',
        'payments',
        'contact_messages',
        'dentists'
    ];

    if (!in_array($table, $allowedTables, true)) {
        throw new InvalidArgumentException('Invalid table name.');
    }

    $stmt = $db->query("SELECT COUNT(*) FROM {$table}");

    return (int) $stmt->fetchColumn();
}

/*
|--------------------------------------------------------------------------
| Appointment Status Badge
|--------------------------------------------------------------------------
*/
function badge(string $status): string
{
    switch ($status) {

        case "Pending":
            return '<span class="badge bg-warning">Pending</span>';

        case "Confirmed":
            return '<span class="badge bg-primary">Confirmed</span>';

        case "Completed":
            return '<span class="badge bg-success">Completed</span>';

        case "Cancelled":
            return '<span class="badge bg-danger">Cancelled</span>';

        default:
            return '<span class="badge bg-secondary">'.$status.'</span>';
    }
}