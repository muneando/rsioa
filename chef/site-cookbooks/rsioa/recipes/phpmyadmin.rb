#
# Cookbook Name:: gbr
# Recipe:: phpmyadmin
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

%w{phpmyadmin php-mysql php-mcrypt}.each do |pkg|
  package pkg do
    action :install
  end
end

execute "httpd_restart" do
  command "/etc/init.d/httpd restart"
  action :nothing
end

cookbook_file "/etc/httpd/conf.d/phpMyAdmin.conf" do
  owner 'root'
  group 'root'
  mode '0644'
  notifies :restart, "service[apache2]", :immediately
end
