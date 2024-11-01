<?php

namespace LTS\FormatBytes;

/**
 * A class to format byte sizes into a human-readable format.
 */
class Formatter
{
    /**
     * @var string[] Sequential array of units of measurement for size in bytes, kilobytes, and so on.
     */
    protected $units;

    /**
     * @param string[] $units Sequential array of units of measurement for size in bytes, kilobytes, and so on.
     */
    public function __construct($units = ['B', 'KB', 'MB', 'GB', 'TB'])
    {
        $this->units = $units;
    }

    /**
     * @param int $bytes
     * @param int $precision
     *
     * @return string
     */
    public function formatBytes($bytes, $precision = 2)
    {
        $bytes    = max($bytes, 0);
        $log_base = $bytes
            ? log($bytes)
            : 0;
        $power    = floor($log_base / log(1024));
        $power    = min($power, count($this->units) - 1);
        $bytes    /= (1 << (10 * $power));

        return sprintf('%1$s%2$s', round($bytes, $precision), $this->units[$power]);
    }
}
