FROM centos:centos6
MAINTAINER nect <lbwh6840@yahoo.co.jp>

ENV PW develop

# apache, php, install
RUN rpm -ivh http://dl.fedoraproject.org/pub/epel/6/i386/epel-release-6-8.noarch.rpm
RUN rpm -ivh http://rpms.famillecollet.com/enterprise/remi-release-6.rpm
RUN yum update -y
RUN yum install -y httpd httpd-devel openssh-server python-setuptools
RUN yum install -y -- enablerepo=epel,remi-php56,remi \
				php \
				php-mysql \
				php-mbstring \
				php-gd \
				php-devel \
				phpmyadmin \
				php-mcrypt \
				php-pdo \
				php-xml \
				php-xdebug \
				php-ldap 
RUN yum clean all
RUN easy_install supervisor

RUN sed -i -e "s|^;date.timezone = .*$|date.timezone = Asia/Tokyo|" /etc/php.ini

# setting files
ADD httpd.conf /etc/httpd/conf/httpd.conf
ADD supervisord.conf /etc/supervisord.conf

EXPOSE 22 80

CMD /usr/bin/supervisord -c /etc/supervisord.conf
