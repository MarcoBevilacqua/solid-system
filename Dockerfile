#Set up debugger
RUN echo
"xdebug.remote_enable=1" >> /etc/php/7.0/apache2/php.ini
RUN echo "xdebug.remote_host=172.18.0.3" >> /etc/php/7.0/apache2/php.ini
