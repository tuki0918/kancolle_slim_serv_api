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
set :linked_files, %w{app/Config/define.php}

# Default value for linked_dirs is []
set :linked_dirs, %w{app/tmp/logs}

# Default value for tmp_dirs is []
set :tmp_dirs, %w{app/tmp app/tmp/logs app/tmp/cache}

# Default value for default_env is {}
# set :default_env, { path: "/opt/ruby/bin:$PATH" }

# Default value for keep_releases is 5
set :keep_releases, 10

namespace :deploy do

  desc "Fix permission in :tmp_dirs."
  task :fix_premission do
    on roles(:app) do
      dirs = fetch(:tmp_dirs)
      if dirs.is_a?(Array)
        dirs.each do |d|
          path = release_path.join(d)
          if test "[ ! -d #{path} ]"
            execute "mkdir -p #{path}"
          end
          execute "chmod 0777 #{path}"
        end
      end
    end
  end

  desc "Composer Install"
  task :composer_install do
    on roles(:app) do
      within release_path do
        execute "cd #{release_path} && composer install"
      end
    end
  end

end

after 'deploy:finished', 'deploy:fix_premission'
after 'deploy:finished', 'deploy:composer_install'