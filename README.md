# XPath Extended

Additional functions for XPath.

## Usage

### Initialisation

```php
<?php

use XPath\DOMXPath;

$xpath = new DOMXPath($domdocument);
```


### XPath\\quote('string')

Quotes a string for use in a query.

```php
<?php

$needle = 'abd\'efg';
$expr = sprintf('//root:root/root:node[php:functionString("XPath\quote", text()) = \'%s\']', $needle);
$list = $xpath->query($expr);
```
