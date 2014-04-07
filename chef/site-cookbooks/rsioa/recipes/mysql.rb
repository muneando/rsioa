# Cookbook Name:: gbr
# Recipe:: mysql
#
# Copyright 2014, AndWorks, Inc.
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.
#

include_recipe 'mysql::server'

execute "mysql-create-user" do
    command "/usr/bin/mysql -u root --password=\"#{node['mysql']['server_root_password']}\"  < /tmp/grants.sql"
    action :nothing
end
 
template "/tmp/grants.sql" do
    owner "root"
    group "root"
    mode "0600"
    variables(
        :user     => node['cakephp']['database']['login'],
        :password => node['cakephp']['database']['password'],
        :database => node['cakephp']['database']['database']
    )
    notifies :run, "execute[mysql-create-user]", :immediately
end

execute "mysql-create-database" do
    command "/usr/bin/mysqladmin -u root --password=\"#{node['mysql']['server_root_password']}\" create #{node['cakephp']['database']['database']}"
    not_if "ls /var/lib/mysql/#{node['cakephp']['database']['database']}"
end