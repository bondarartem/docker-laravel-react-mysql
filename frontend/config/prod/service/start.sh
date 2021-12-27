#!/bin/sh

npm install
npm run build
/usr/sbin/apache2ctl -DFOREGROUND