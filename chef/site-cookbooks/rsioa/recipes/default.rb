#
# Cookbook Name:: gbr
# Recipe:: default
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

include_recipe 'rsioa::iptables'
include_recipe 'rsioa::mysql'
include_recipe 'rsioa::phpmyadmin'
include_recipe 'rsioa::cakephp'

# apache2のレシピを読み込んで、デフォルトのVirtualHostを無効にする。
include_recipe "apache2"
execute "a2dissite default"

# コピーしたVirtualHostのテンプレートを設定する。
web_app "rsioa" do
  server_name node['hostname']
  server_aliases [node['fqdn'], "rsioa"]
  docroot "/vagrant/app/webroot/"
  allow_override "All"
end