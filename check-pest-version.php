<?php

require 'vendor/autoload.php';

// Retrieve Pest version
$pestVersion = \Composer\InstalledVersions::getPrettyVersion('pestphp/pest');

// Output Pest version
echo "Pest version: $pestVersion\n";
