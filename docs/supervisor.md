####  Installing supervisor
sudo  apt install supervisor

#### Auto starting supervisor

sudo supervisorctl reread

sudo supervisorctl update

sudo supervisorctl start laravel-worker:*



##### Modify to suit the server

[program:laravel-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /media/kyerematics/fb73796c-852e-4b81-aecd-677cd19215ce/Kwadwo/codex/myroommie/artisan queue:work redis --sleep=5 --tries=3
autostart=true
autorestart=true
user=kyerematics
password=qwerty
numprocs=6
redirect_stderr=true
stdout_logfile=/media/kyerematics/fb73796c-852e-4b81-aecd-677cd19215ce/Kwadwo/codex/myroommie/worker.log
