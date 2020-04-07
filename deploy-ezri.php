<?php
define("TOKEN", "jeanbispo");                                       // The secret token to add as a GitHub or GitLab secret, or otherwise as https://www.example.com/?token=secret-token
define("REMOTE_REPOSITORY", "git@gitlab.com:shvot/ezrisite-next.git"); // The SSH URL to your repository
define("DIR", "/var/www/html/ezrisite-next/");                          // The path to your repostiroy; this must begin with a forward slash (/)
define("BRANCH", "refs/heads/master");                                 // The branch route
define("LOGFILE", "deploy.log");                                       // The name of the file you want to log to.
define("GIT", "/usr/bin/git");                                         // The path to the git executable
define("MAX_EXECUTION_TIME", 180);                                     // Override for PHP's max_execution_time (may need set in php.ini)
define("BEFORE_PULL", "");                                             // A command to execute before pulling
define("AFTER_PULL", "/usr/bin/yarn install && /usr/bin/yarn run build && /usr/bin/env HOME=/home/www-data /usr/local/bin/pm2 restart ezrisite --update-env");                                              // A command to execute after successfully pulling
//define("AFTER_PULL", "/usr/bin/yarn install && /usr/local/bin/adonis migration:run --force && /usr/bin/env HOME=/home/www-data /usr/local/bin/pm2 restart astronomia_api --update-env");

require_once("deployer.php");
