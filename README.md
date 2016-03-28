sim3
====

INSTALLATION NOTES

-1) git clone git@github.com:usaqlain01/simtec2.git 
-2) cd simtec2/ 
-3) composer install

For Linux (permissions fix)

-1) HTTPDUSER=ps aux | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\ -f1
-2) sudo setfacl -R -m u:$HTTPDUSER:rwX -m u:`whoami`:rwX var/cache var/logs web 
-3) sudo setfacl -dR -m u:$HTTPDUSER:rwX -m u:`whoami`:rwX var/cache var/logs web
