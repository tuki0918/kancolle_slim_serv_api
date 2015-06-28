set :stage, :staging
set :branch, 'development'

set :deploy_to, '/var/www/html/deploy'

server 'localhost', roles: %w{app}, ssh_options: {
    port: 22,
    user: '****',
    keys: %w(~/.ssh/id_rsa),
    forward_agent: true,
    auth_methods: %w(publickey)
}