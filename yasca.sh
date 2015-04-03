#!/bin/bash

# Detect the operating system (Linux vs. OSX)
OS=`uname -s`

if [ "${OS}" = "darwin" ]; then
  PHP=bin/php_osx
else
  PHP=php
fi

# Start Yasca
$PHP -c bin/php-linux.ini -d extension_dir=/usr/lib/php5/20121212 yasca/start.php $*
