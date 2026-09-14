<?php
declare(strict_types=1);

// PHP 8.0+; tanpa database, package manager, atau proses build.
date_default_timezone_set('Asia/Jakarta');
require_once __DIR__ . '/data.php';

function e($value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function rupiah(?int $value): string
{
    return $value === null ? 'Hubungi klinik' : 'Rp' . number_format($value, 0, ',', '.');
}

function asset_exists(string $path): bool
{
    return str_starts_with($path, 'assets/') && !str_contains($path, '..')
        && is_file(dirname(__DIR__) . '/' . $path);
}

function photo_source(string $path): string
{
    return asset_exists($path) ? $path : 'assets/images/placeholders/clinic.svg';
}

function icon(string $name, string $class = ''): string
{
    $paths = [
        'cross' => '<path d="M9 3h6v6h6v6h-6v6H9v-6H3V9h6z"/>',
        'lab' => '<path d="M9 3h6M10 3v7L4 19a1 1 0 0 0 1 2h14a1 1 0 0 0 1-2l-6-9V3M8 14h8"/>',
        'shield' => '<path d="m12 3 8 3v6c0 5-8 9-8 9s-8-4-8-9V6z"/><path d="m8 12 3 3 5-6"/>',
        'heart' => '<path d="M20 5c-3-3-7-1-8 1-1-2-5-4-8-1-4 5 1 10 8 15 7-5 12-10 8-15z"/><path d="M4 12h4l2-3 3 6 2-3h5"/>',
        'activity' => '<path d="M3 12h4l3-8 4 16 3-8h4"/>',
        'air' => '<path d="M3 8h12a3 3 0 1 0-3-3M3 12h16a3 3 0 1 1-3 3M3 16h5a3 3 0 1 1-3 3"/>',
        'drop' => '<path d="M12 3S5 11 5 15a7 7 0 0 0 14 0c0-4-7-12-7-12zM9 15a3 3 0 0 0 3 3"/>',
        'home' => '<path d="m3 11 9-8 9 8M5 10v11h14V10M9 21v-7h6v7"/>',
        'chat' => '<path d="M21 11a9 9 0 0 1-9 9 10 10 0 0 1-4-1l-5 2 1-5a9 9 0 1 1 17-5z"/><path d="M8 8c0 4 4 7 7 7l2-2-3-2-1 1-2-2 1-1-2-3z"/>',
        'pin' => '<path d="M19 10c0 5-7 11-7 11S5 15 5 10a7 7 0 1 1 14 0z"/><circle cx="12" cy="10" r="2"/>',
        'clock' => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        'check' => '<path d="m5 12 4 4L19 6"/>',
        'arrow' => '<path d="M4 12h16m-6-6 6 6-6 6"/>',
        'photo' => '<rect x="3" y="3" width="18" height="18" rx="3"/><circle cx="8" cy="8" r="1"/><path d="m3 16 5-5 4 4 4-6 5 7"/>',
        'play' => '<path d="m9 5 11 7-11 7z"/>',
        'price' => '<path d="M3 3h9l9 9-9 9-9-9z"/><circle cx="8" cy="8" r="1"/>',
        'lock' => '<rect x="5" y="10" width="14" height="11" rx="2"/><path d="M8 10V7a4 4 0 0 1 8 0v3M12 14v3"/>',
    ];
    return '<svg class="icon ' . e($class) . '" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . ($paths[$name] ?? $paths['cross']) . '</svg>';
}

require_once dirname(__DIR__) . '/includes/components.php';
