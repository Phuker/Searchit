FROM php:apache

COPY ./config /root/

RUN echo 'setup...' && \
#
# china mirror
timeout 4 bash -c "</dev/tcp/google.com/443" || \
{ \
    echo 'In China, use mirror...' && \
    echo 'change apt source' && \
    find /etc/apt/ -type f -name '*.list' -print -exec sed -i 's/security.debian.org/mirrors.tuna.tsinghua.edu.cn/g' {} \; && \
    find /etc/apt/ -type f -name '*.list' -print -exec sed -i 's/deb.debian.org/mirrors.tuna.tsinghua.edu.cn/g' {} \; && \
    echo '- - - - - apt source list [start] - - - - -' && \
    find /etc/apt/ -type f -name '*.list' -print -exec cat {} \; && \
    echo '- - - - - apt source list [end] - - - - -' && \
    echo 'Done setting mirror.'; \
} && \
#
echo 'install dependencies ...' && \
apt-get update && apt-get install -y curl libcurl4-openssl-dev && \
#
echo 'install php curl ...' && \
docker-php-ext-install curl && \
#
# configs
cp /root/php.ini /usr/local/etc/php/conf.d/custom_php.ini && \
cp /root/000-default.conf /etc/apache2/sites-enabled/ && \
#
echo 'done'

EXPOSE 80
