# format-bytes
Simple function formatBytes() that you all heard about and implemented - now in packagist

## Installation

Composer installation:

    composer require letraceursnork/format-bytes

## Usage

```php
use LTS\FormatBytes\Formatter;

$formatter = new Formatter();
$formatter = new Formatter([' bytes suffix', ' KBytes suffix', ' MBytes suffix', 'etc...']);
$bytes = 2048;
$result = $formatter->formatBytes($bytes, $optional_precision);
echo $result; // 2 KBytes suffix
```
