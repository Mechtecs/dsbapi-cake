$hostname = "dsbapi-cake"

unless Vagrant.has_plugin?("landrush")
  raise 'The landrush plugin is not installed!'
end

Vagrant.configure(2) do |config|
    config.vm.box = "ubuntu/trusty64"

    config.vm.provision "shell", path: "provisioner.sh"

    config.vm.hostname = $hostname + ".kek"

    config.vm.network "private_network", type: "dhcp"

    config.vm.synced_folder ".", "/vagrant", owner: "www-data", mount_options: ["dmode=775,fmode=775"]

    config.vm.provider "virtualbox" do |vb|
        vb.memory = 512
        vb.name = $hostname
        vb.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    end

    config.landrush.enabled = true
    config.landrush.tld = 'kek'
end
