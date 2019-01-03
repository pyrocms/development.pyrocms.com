@servers(['web' => 'pyrocms@68.183.132.200'])

@task('push', ['on' => 'web'])
cd /home/pyrocms/domains/development.pyrocms.com/
git pull
@endtask

@task('update', ['on' => 'web'])
cd /home/pyrocms/domains/development.pyrocms.com/
composer update -o
@endtask

@task('build', ['on' => 'web'])
cd /home/pyrocms/domains/development.pyrocms.com/
php bin/satis build
@endtask
