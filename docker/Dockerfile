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
    ../../composer.phar install 



