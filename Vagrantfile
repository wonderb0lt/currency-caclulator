Vagrant.configure('2') do |config|
    config.vm.box = "precise"
    config.vm.box_url = "https://cloud-images.ubuntu.com/vagrant/precise/current/precise-server-cloudimg-amd64-vagrant-disk1.box"
    config.vm.provision "shell", path: "bootstrap.sh"
    config.vm.network "private_network", ip: "10.0.20.10"
    config.vm.network "forwarded_port", guest:8000, host:80
end