set :stage, :production
set :branch, 'master'

set :deploy_to, "/var/www/#{fetch :application}_deploy"

server 'localhost', roles: %w{app}, ssh_options: {
    port: 22,
    user: '****',
    keys: %w(~/.ssh/id_rsa),
    forward_agent: true,
    auth_methods: %w(publickey)
}