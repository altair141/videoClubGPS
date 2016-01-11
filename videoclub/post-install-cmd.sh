#!/bin/sh
if [ -n "$DYNO" ]
then
    php init --env=Heroku --overwrite=All
    ln -s /videoclub/backend/web frontend/web/backend
    ln -s /videoclub/vendor/bower-asset vendor/bower
fi
