# Title  : updateWebApplication.sh
# Author : Nicolas Glassey
# Purpose: Update the web application by pulling the repository (on develop)
# Version: 26-APR-2020
# More   : This script only update the code. The sql script will also be updated but           not executed. This requiers manual actions through the mysql client.

#!/bin/bash

projectNameFolder='projetwebbdd_startcode_2019_2020'
webSitePathFolder='/var/www/html'

# update the code
cd /home/admin/temp/${projectNameFolder}

echo `pwd`

git pull

# remove old code

sudo rm -rf $webSitePathFolder

# deploy new code version

sudo cp -r ./src $webSitePathFolder

# deploy new documentation version

sudo cp -r ./docs $webSitePathFolder/docs

# end of process

echo "Deployment process ended"