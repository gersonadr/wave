 - running Laravel 8 from Bitnami (super easy)

mkdir ~/myapp && cd ~/myapp
curl -LO https://raw.githubusercontent.com/bitnami/bitnami-docker-laravel/master/docker-compose.yml
docker-compose up

it will install files locally, so I can work on VS Code and it detect changes. Good times

 - running Wave

 - installing composer

  (start with any php cli version)
sudo add-apt-repository -y ppa:ondrej/php
sudo apt update
sudo apt install php7.2-cli
sudo curl -s https://getcomposer.org/installer | php
composer

 - forget about Dockerfile or docker-compose.yml included on Git.. it's garbage

 git clone https://github.com/thedevdojo/wave.git

 cp .env.example to .env.

 - make sure you have Mysql running with 'wave' password and a non-root user with all priviledges

sudo apt install mysql-server
sudo mysql_secure_installation
sudo mysql -u root -p
> create user 'wave_user'@'localhost' identified by 'password';
> grant all privileges on * . * to 'wave_user'@'localhost';
> exit

 - modify .env with DB user and password

 - installing composer packages. you have to use several php versions and packages in each version. it's a pain

composer install

<bunch of errors>

 - install PHP 7.3 for certain packages and change default

sudo apt-get install php7.3 php7.3-cli php7.3-common
sudo apt install php7.3-dom
sudo apt install php7.3-zip
sudo apt install php7.3-curl
sudo apt install php7.3-mbstring
sudo update-alternatives --set php /usr/bin/php7.3

 - similarly, install PHP 7.2 and change:

sudo apt-get install php7.2 php7.2-cli php7.2-common
sudo apt install php7.2-dom
sudo apt install php7.2-zip
sudo apt install php7.2-curl
sudo apt install php7.2-mbstring
sudo update-alternatives --set php /usr/bin/php7.2

(at least naming is consistent)

 - if composer "get stuck", clear cache and self update

 composer clearcache
 composer selfupdate

 - after 'compose install' runs without errors, install driver

sudo apt install php7.3-mysql

 - create tables with artisan

 php artisan migrate

 - start server

 php artisan serve



 --- Local History

  1978  clear
 1979  sudo apt update
 1980  sudo apt upgrade
 1981  time
 1982  up
 1983  man time
 1984  sudo apt update
 1985  sudo apt upgrade
 1986  sudo apt update
 1987  cd /mnt/
 1988  ls
 1989  cd /media/
 1990  ls
 1991  cd gerson/
 1992  ls
 1993  cd Seagate/
 1994  ls
 1995  cd Projects/
 1996  ls
 1997  ls -la
 1998  exit
 1999  cd Downloads/
 2000  mv tails-1633836040.html index.html
 2001  serve &
 2002  clear
 2003  composer
 2004  clear
 2005  sail up
 2006  cd
 2007  cd sandbox/
 2008  mkdir laravel
 2009  clear
 2010  cd laravel/
 2011  clear
 2012  curl -sL https://github.com/thedevdojo/larasail/archive/master.tar.gz | tar xz && source larasail-master/install
 2013  larasail -f
 2014  docker run --rm     -v $(pwd):/opt     -w /opt     laravelsail/php80-composer:latest     composer install
 2015  clear
 2016  docker run --rm     -v $(pwd):/opt     -w /opt     laravelsail/php80-composer:latest     composer install
 2017  ls
 2018  docker images
 2019  docker run --rm     -v $(pwd):/opt     -w /opt     laravelsail/php80-composer:latest -it sh
 2020  docker run --rm     -v $(pwd):/opt     -w /opt     laravelsail/php80-composer:latest -it /bin/sh
 2021* docker run --rm     -v $(pwd):/opt     -w /opt     laravelsail/php80-composer:latest -it /b
 2022  docker ps
 2023  clear
 2024  docker images
 2025  clear
 2026  ls
 2027  sail up
 2028  git clone https://github.com/laravel/sail.git
 2029  cd sail/
 2030  sail up
 2031  ls bin/
 2032  bin/sail up
 2033  ./bin/sail up
 2034  cd ..
 2035  ls
 2036  rm -rf sail/
 2037  ls
 2038  clear
 2039  $ curl -LO https://raw.githubusercontent.com/bitnami/bitnami-docker-laravel/master/docker-compose.yml
 2040  curl -LO https://raw.githubusercontent.com/bitnami/bitnami-docker-laravel/master/docker-compose.yml
 2041  docker-compose up
 2042  sudo apt purge python2.x-minimal
 2043  sudo apt purge python2
 2044  sudo apt purge python
 2045  python --version
 2046  python3
 2047  which python3
 2048  which python
 2049  sudo update-alternatives --install /usr/bin/python python /usr/bin/python3 10
 2050  python --version
 2051  clear
 2052  docker-compose up
 2053  vi docker-compose.yml 
 2054  docker-compose up
 2055  cd ../
 2056  mkdir sail
 2057  git clone https://github.com/laravel/sail.git
 2058  cd sail/
 2059  ./bin/sail up
 2060  sudo chmod +x /usr/local/bin/docker-compose
 2061  ./bin/sail up
 2062  cd ..
 2063  cd laravel/
 2064  ls
 2065  docker-compose up
 2066  cd ..
 2067  mkdir laravel2
 2068  cd laravel2/
 2069  docker-compose up
 2070  curl -LO https://raw.githubusercontent.com/bitnami/bitnami-docker-laravel/master/docker-compose.yml
 2071  docker-compose up
 2072  cd ..
 2073  cd wave/
 2074  clear
 2075  ls
 2076  docker images
 2077  clear
 2078  composer
 2079  clear
 2080  docker-composer up
 2081  docker-compose up
 2082  docker system prune -a
 2083  docker images
 2084  clear
 2085  docker-compose up
 2086  cd ..
 2087  open .
 2088  diff -q myapp/ wave/
 2089  diff -q $HOME/myapp wave/
 2090  php
 2091  sudo apt update
 2092  sudo apt install php7.2-cli
 2093  php
 2094  sudo curl -s https://getcomposer.org/installer | php
 2095  composer
 2096  php composer
 2097  php composer.phar
 2098  sudo mv composer.phar /usr/local/bin/composer
 2099  chmod +x /usr/local/bin/composer
 2100  php composer
 2101  composer
 2102  cd wave/
 2103  ls
 2104  find . --name ".env.example"
 2105  find . -name ".env.example"
 2106  cp .env.example .env
 2107  vi .env
 2108  composer install
 2109  docker ps
 2110  $HOME/docker-compose exec composer install
 2111  docker-compose -f /home/gerson/myapp/docker-compose.yml exec composer install
 2112  docker-compose -f /home/gerson/myapp/docker-compose.yml exec composer install .
 2113  sudo apt remove php7.2-cli
 2114  sudo add-apt-repository ppa:ondrej/php
 2115  sudo apt update
 2116  sudo add-apt-repository ppa:ondrej/php
 2117  sudo apt install software-properties-common
 2118  sudo apt install php8.0 libapache2-mod-php8.0
 2119  ./buildDocker.sh 
 2120  docker ps
 2121  cd ~/myapp/
 2122  docker-compose down
 2123  cd
 2124  cd sandbox/wave/
 2125  ls
 2126  docker images
 2127  docker run 6ada0587d322 -it
 2128  docker run 6ada0587d322
 2129  ls
 2130  ls -la
 2131  docker run -it 6ada0587d322 sh
 2132  docker images
 2133  docker rmi 6ada0587d322
 2134  docker stop 02af58bf000a
 2135  docker rmi 6ada0587d322
 2136  docker rmi 6ada0587d322 -f
 2137  clear
 2138  docker images
 2139  clear
 2140  ./buildDocker.sh 
 2141  docker images
 2142  docker exec -it e46104d0b154 sh
 2143  docker run -it e46104d0b154 sh
 2144  docker ps
 2145  docker images
 2146* docker rmi e4610 -f
 2147  ./buildDocker.sh 
 2148  docker images
 2149  docker-compose up -d
 2150  docker ps
 2151  docker-compose up -d
 2152  docker-compose down
 2153  docker-compose up
 2154  ls
 2155  chmod 777 init_db.sql 
 2156  sudo chmod 777 init_db.sql 
 2157  ls -latr
 2158  docker-compose up
 2159  cat init_db.sql 
 2160  docker-compose up
 2161  docker-compose down -v
 2162  docker-compose up
 2163  docker-compose down -v
 2164  docker-compose up
 2165  docker-compose down -v
 2166  docker-compose up
 2167  docker-compose down -v
 2168  docker-compose up
 2169  docker-compose down -v
 2170  docker-compose up
 2171  docker-compose down -v
 2172  docker-compose up
 2173  docker-compose down -v
 2174  docker-compose up
 2175  docker-compose down -v
 2176  docker-compose up
 2177  docker-compose down -v
 2178  docker-compose up
 2179  docker-compose down -v
 2180  docker-compose up
 2181  docker-compose down -v
 2182  docker-compose up
 2183  docker-compose down -v
 2184  docker-compose up
 2185  docker-compose down -v
 2186  docker-compose up
 2187  docker-compose down -v
 2188  ./buildDocker.sh 
 2189  docker images
 2190  docker run bitnami/laravel 
 2191  docker run bitnami/laravel:7.30.1-wave
 2192  php
 2193  compose
 2194  cd ..
 2195  rm -rf wave/
 2196  git clone https://github.com/thedevdojo/wave.git
 2197  cd wave/
 2198  clear
 2199  cp .env.example .env.
 2200  rm .env. .env
 2201  cp .env.example .env
 2202  vi .env
 2203  composer install
 2204  php --ini
 2205  composer selfupdate
 2206  composer clearcache
 2207  composer selfupdate
 2208  composer install
 2209  sudo apt-get install php-mbstring
 2210  composer install
 2211  composer update
 2212  sudo apt-get install php-curl
 2213  composer update
 2214  apt install php-pecl-zip
 2215  apt-get install php7.2-zip
 2216  sudo apt-get install php7.2-zip
 2217  composer update
 2218  php -v
 2219  sudo apt-get install php7.2 php7.2-cli php7.2-common
 2220  composer update
 2221  ls /usr/bin/php7.2
 2222  sudo update-alternatives --set php /usr/bin/php7.2
 2223  composer update
 2224  sudo apt-get install php-curl
 2225  composer update
 2226  sudo apt-get remove php-curl
 2227  sudo apt autoremove
 2228  composer update
 2229  sudo apt-get install php-curl
 2230  sudo apt-get install php7.2-curl
 2231  composer update
 2232  composer clearcache\
 2233  composer clearcache
 2234  composer update
 2235  sudo apt-get install php7.3 php7.3-cli php7.3-common
 2236  sudo update-alternatives --set php /usr/bin/php7.3
 2237  php -v
 2238  composer install
 2239* sudo apt install 
 2240  sudo apt install php-dom
 2241  sudo apt install php7.3-dom
 2242  sudo apt install php7.3-zip
 2243  sudo apt install php7.3-curl
 2244  composer update
 2245  sudo apt-get install php-mbstring
 2246  sudo apt-get install php7.3-mbstring
 2247  composer update
 2248  composer install
 2249  php artisan migrate
 2250  cat .env
 2251  clear
 2252  php artisan migrate
 2253  sudo apt-get install php7-mysql
 2254  sudo apt-get install php7.3-mysql
 2255  php artisan migrate
 2256  sudo php artisan migrate
 2257  vi .env
 2258  clear
 2259  php artisan migrate
 2260  php artisan serve
 2261  history