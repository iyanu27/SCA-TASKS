## What Is an IP Address?
IP address stands for internet protocol address; it is an identifying number that is associated with a specific computer or computer network. When connected to the internet, the IP address allows the computers to send and receive information.

There are four types of IP addresses: public, private, static, and dynamic.

A static IP address is one that was manually created, as opposed to having been assigned. A static address also does not change, whereas a dynamic IP address has been assigned by a Dynamic Host Configuration Protocol (DHCP) server and is subject to change.

Private IP Address and Public IP Address are used to uniquely identify a machine on the internet. Private IP address is used with a local network and public IP address is used outside the network. Public IP address is provided by ISP, Internet Service Provider.


10.0.0.0 to 10.255.255.255: This falls within the Class A address range of 1.0.0.0 to 127.0.0.0, in which the first bit is 0.
172.16.0.0 to 172.31.255.255: This falls within the Class B address range of 128.0.0.0 to 191.255.0.0, in which the first two bits are 10.
192.168.0.0 to 192.168.255.255: This falls within the Class C range of 192.0.0.0 through 223.255.255.0, in which the first three bits are 110.
Multicast (formerly called Class D): The first four bits in the address are 1110, with addresses ranging from 224.0.0.0 to 239.255.255.255.
Reserved for future/experimental use (formerly called Class E) : addresses 240.0.0.0 to 254.255.255.254.


## What is VPC(Virtual private cloud)
A virtual private cloud (VPC) is a secure, isolated private cloud hosted within a public cloud. VPC customers can run code, store data, host websites, and do anything else they could do in an ordinary private cloud, but the private cloud is hosted remotely by a public cloud provider. (Not all private clouds are hosted in this fashion.) VPCs combine the scalability and convenience of public cloud computing with the data isolation of private cloud computing.

 In azure it is called Azure Virtual network.
 
 ## Subnetting 
 A subnet is a range of IP addresses within a network that are reserved so that they're not available to everyone within the network, essentially dividing part of the network for private use
 
Public subnet is a subnet that has internet access
Private subnet is a subnet that has no internet access

## Firewall rules
A firewall rule can be applied to traffic from the Internet to your computer (inbound), or from your computer to the Internet (outbound). A rule can also be applied to both directions at the same time.

The firewall protects your computer by allowing safe Internet traffic and blocking unsafe traffic.

## Bastion hosts
This is a server whose purpose is to provide access to private network  from  an external network such as internet,allows ssh connection.






