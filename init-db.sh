php app/console doctrine:database:drop --force
php app/console doctrine:database:create
php app/console doctrine:schema:update --force
php app/console doctrine:fixtures:load
php app/console fos:user:create admin maxence.dupressoir@gmail.com p@$$w0rd --super-admin
