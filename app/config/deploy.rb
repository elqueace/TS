
set :application, "MyApplication"

# SSH settings
set :domain,  "tutorskills.ca"
set :serverName,  "sg211.servergrove.com"
set :user,        "tutorski"
set :password, "Manmanw92268869" #Mot de passe ssh

set :deploy_to,   "/var/www/vhosts/tutorskills.ca/httpdocs"
set :deploy_via, :copy #Comment déployer les fichiers.

set :app_path,    "app"

# Repository settings
set :repository,  "https://github.com/elqueace/TS.git"
set :scm,         :git

set :use_sudo, false #Je n'ai pas les droits pour faire du sudo
set :use_composer, false
# Symfony settings
role :web,        "tutorskills.ca"                         # Your HTTP server, Apache/etc
role :app,        "tutorskills.ca"                         # This may be the same as your `Web` server
role :db,         "tutorskills.ca", :primary => true       # This is where Symfony2 migrations will run

set :writable_dirs,       ["app/cache", "app/logs"]
set :shared_files,    ["app/config/parameters.ini"]
