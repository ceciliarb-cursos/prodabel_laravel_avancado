FROM nexus.pbh:5000/prodabel/debian-jessie_apache2.4_php7.1_laravel

ARG GIT_USER
ARG GIT_PASS
ARG GIT_URL

RUN apt-get install git -qy

RUN git config --global user.name ${GIT_USER} && \
    git config --global user.email "${GIT_USER}@pbh.gov.br" && \
    git config --global credential.username ${GIT_USER} && \
    git config --global credential.helper '!f() { echo "password='${GIT_PASS}'"; }; f' && \
    git config --global push.default simple && \
    git config --global http.sslVerify "false"

RUN cd /tmp && \
    git clone ${GIT_URL} codigo-fonte && \
    cd codigo-fonte && \
    ../../composer.phar install && \
    mv .env.qa .env && \
    touch /tmp/codigo-fonte/database/database.sqlite && \
    php artisan key:generate && \
    sed -i 's/;extension=php_sqlite3.dll/extension=php_sqlite3.dll/g' /etc/php/7.1/apache2/php.ini && \
#    php artisan migrate && \
    echo "php artisan serve --host=0.0.0.0 --port=80 &" >> /entrypoint.sh 
    
       



