FROM node:18.16.0-alpine

RUN apk add --update bash && rm -rf /var/cache/apk/*
RUN npm i -g nws
WORKDIR /var/www/html/

ENTRYPOINT ["sh", "-c"]

CMD [ "nws" ]
