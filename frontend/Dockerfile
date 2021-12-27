FROM ubuntu
ENV TZ=Europe/Moscow
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get clean && apt-get update && apt-get install -y nodejs \
    apache2 \
    npm \
    iproute2

WORKDIR /app

RUN chmod -R 777 /app

COPY ./config/prod/apache.conf /etc/apache2/sites-available/000-default.conf

COPY ./config/prod/service/ /service/
RUN chmod -R 777 /service

CMD ["/service/start.sh"]