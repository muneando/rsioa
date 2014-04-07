# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.hostname = "rsioa"
  config.vm.box = "centos64"
  config.vm.box_url = "http://developer.nrel.gov/downloads/vagrant-boxes/CentOS-6.4-x86_64-v20130427.box"

  config.vm.network :private_network, ip: "192.168.33.15"
  config.vm.boot_timeout = 120

  config.vm.provider :virtualbox do |vb|
    # Don't boot with headless mode
    vb.gui = true
 
    # Use VBoxManage to customize the VM. For example to change memory:
    vb.customize ["modifyvm", :id, "--memory", "1024"]
  end

  config.vm.provision :chef_solo do |chef|
   chef.cookbooks_path = ["./chef/cookbooks", "./chef/site-cookbooks"]

    chef.add_recipe     "yum-epel"
    chef.add_recipe     "apache2"
    chef.add_recipe     "apache2::mod_php5"
    chef.add_recipe     "apache2::mod_rewrite"
    chef.add_recipe     "iptables"
    chef.add_recipe     "mysql"
    chef.add_recipe     "mysql::client"
    chef.add_recipe     "mysql::server"
    chef.add_recipe     "php"
    chef.add_recipe     "php::module_mysql"

    chef.add_recipe     "rsioa"

    chef.json = {
      :apache => {
        :default_site_enabled => true,
        :docroot_dir => '/vagrant'
      },
      :mysql => {
        :server_root_password => "rsioa",
        :server_repl_password => "rsioa",
        :server_debian_password => "rsioa"
      },
      :php => {
        :timezone => 'Asia/Tokyo'
      }
    }
    end

  config.omnibus.chef_version = :latest

  #config.berkshelf.enabled = true

  config.vm.synced_folder "./", "/vagrant", :create => true, :owner=> 'vagrant', :mount_options => ['dmode=777','fmode=777']

end

