<?php

namespace XPath;

function quote($string)
{
    return \htmlspecialchars($string, ENT_QUOTES);
}
