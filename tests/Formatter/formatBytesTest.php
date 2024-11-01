<?php

use LTS\FormatBytes\Formatter;
use PHPUnit\Framework\TestCase;

class formatBytesTest extends TestCase
{
    /**
     * @dataProvider formatBytesProvider
     *
     * @return void
     */
    public function testFormatBytes($bytes, $formatted)
    {
        $formatter = new Formatter();
        $this->assertEquals($formatted, $formatter->formatBytes($bytes));
    }

    public static function formatBytesProvider()
    {
        return [
            [-1, '0B'],
            [0, '0B'],
            [1000, '1000B'],
            [1024, '1KB'],
            [1025, '1KB'],
            [1075, '1.05KB'],
            [1536, '1.5KB'],
            [2048, '2KB'],
            [2097152, '2MB'],
            [2147483648, '2GB'],
            [2199023255552, '2TB'],
            [2251799813685248, '2048TB'],
        ];
    }
}
