
set :serverName,   "sg211.servergrove.com" # The server's hostname
set :repository,   "C:/wamp/www/tutorskills_symf/path"

set :domain,      "tutorskills.ca"
set :deploy_to,   "/var/www/html/" # Remote location where the project will be stored
ssh_options[:port] = "22123"

set :scm,         :git
set :deploy_via,  :rsync_with_remote_cache

# connection
ssh_options[:port] = 22123
set  :use_sudo,       false
set :user,        "tutorski"
set :password, "Manmanw92268869"

# Roles
role :web,        domain
role :app,        domain
role :db,         domain, :primary => true

set  :keep_releases,  3 # The number of releases which will remain on the server

# Update vendors during the deploy
set :update_vendors, true

# perform tasks after deploying
after "deploy" do
  # clear the cache
  run "cd /symfony_projects/current && php app/console cache:clear"
end