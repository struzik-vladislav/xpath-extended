<?php

namespace XPath;

class DOMXPath extends \DOMXPath
{
    public function __construct(\DOMDocument $doc)
    {
        parent::__construct($doc);
        $this->registerNamespace('php', 'http://php.net/xpath');
        $this->registerPhpFunctions(['XPath\quote']);
    }
}
