FROM debian:buster

RUN apt-get update -y
RUN apt-get -y install wget nginx openssl php-fpm php-mysql mariadb-server php-mbstring php-zip php-gd

RUN mkdir /var/www/kgale
RUN mkdir /etc/nginx/ssl
WORKDIR /var/www/kgale
COPY srcs/ .

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/ssl.key -out /etc/nginx/ssl/ssl.pem -subj "/C=RF/ST=Moscow/L=Moscow/O=school21/OU=kgale/CN=my_domain"
RUN mv nginx.conf /etc/nginx/sites-available/default
RUN chmod +x *.sh
EXPOSE 80 443
CMD ["bash", "init.sh"]

#https://www.digicert.com/kb/ssl-support/openssl-quick-reference-guide.htm
#https://www.tecmint.com/generate-csr-certificate-signing-request-in-linux/

#docker build -t servername .
#docker run -it -p 80:80 -p 443:443 servername