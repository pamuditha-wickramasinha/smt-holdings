<?php
/**
 * Generate a static CSS file with theme variables from .env
 * Usage: php scripts/generate-theme-css.php
 */

$root = dirname(__DIR__);
$envFile = $root . DIRECTORY_SEPARATOR . '.env';

$defaults = [
    'PRIMARY_COLOR' => '#F5BF23',
    'SECONDARY_COLOR' => '#292929',
    'DARK_COLOR' => '#222222',
    'ACCENT_HOVER_COLOR' => '#222222',
];

$values = $defaults;
if (is_readable($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '' || strpos($line, '#') === 0) {
            continue;
        }
        if (strpos($line, '=') === false) {
            continue;
        }
        list($key, $val) = explode('=', $line, 2);
        $key = trim($key);
        $val = trim($val);
        // strip surrounding quotes
        if ((substr($val, 0, 1) === '"' && substr($val, -1) === '"') || (substr($val, 0, 1) === "'" && substr($val, -1) === "'")) {
            $val = substr($val, 1, -1);
        }
        if (array_key_exists($key, $values)) {
            $values[$key] = $val;
        }
    }
}

$css = "/* Generated theme variables - do not edit by hand */\n:root {\n";
$css .= "    --site-primary: {$values['PRIMARY_COLOR']};\n";
$css .= "    --site-secondary: {$values['SECONDARY_COLOR']};\n";
$css .= "    --site-dark: {$values['DARK_COLOR']};\n";
$css .= "    --site-hover: {$values['ACCENT_HOVER_COLOR']};\n";
$css .= "    --site-primary-alpha: {$values['PRIMARY_COLOR']}33;\n";
$css .= "}\n";

$outDir = $root . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'css';
if (!is_dir($outDir)) {
    mkdir($outDir, 0755, true);
}
$outFile = $outDir . DIRECTORY_SEPARATOR . 'dynamic-colors.css';
if (false === file_put_contents($outFile, $css)) {
    fwrite(STDERR, "Failed to write $outFile\n");
    exit(1);
}
fwrite(STDOUT, "Written $outFile\n");
exit(0);