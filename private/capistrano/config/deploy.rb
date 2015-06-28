# config valid only for current version of Capistrano
lock '3.4.0'

set :application, 'slim-micro-mvc'
set :repo_url, "git@github.com:tuki0918/#{fetch :application}.git"

# Default value for :format is :pretty
# set :format, :pretty

# Default value for :log_level is :debug
# set :log_level, :debug

# Default value for :pty is false
# set :pty, true

# Default value for :linked_files is []
set :linked_files, fetch(:linked_files, []).push('app/Config/define.php')

# Default value for linked_dirs is []
set :linked_dirs, fetch(:linked_dirs, []).push('logs')

# Default value for default_env is {}
# set :default_env, { path: "/opt/ruby/bin:$PATH" }

# Default value for keep_releases is 5
set :keep_releases, 10

namespace :deploy do

end
