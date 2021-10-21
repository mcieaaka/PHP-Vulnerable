#Only for Debian and Ubuntu
#Kali-Linux is recommended
sudo apt-get update

sudo apt-get upgrade

sudo apt-get install git

cd Desktop

git clone https://github.com/NewEraCracker/LOIC.git

cd LOIC

sudo apt-get install mono-xbuild


./loic.sh install

./loic.sh run



#If you get package not found errors:
#sudo nano /etc/apt/sources.list 
#deb http://http.kali.org/kali kali-rolling main contrib non-free
###### For source package access, uncomment the following line
###### deb-src http://http.kali.org/kali kali-rolling main contrib non-free
#deb http://http.kali.org/kali sana main non-free contrib
#deb http://security.kali.org/kali-security sana/updates main contrib non-free
###### For source package access, uncomment the following line
##### deb-src http://http.kali.org/kali sana main non-free contrib
##### deb-src http://security.kali.org/kali-security sana/updates main contrib non-free
#deb http://old.kali.org/kali moto main non-free contrib
##### For source package access, uncomment the following line
##### deb-src http://old.kali.org/kali moto main non-free contrib