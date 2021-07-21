FROM ubuntu:20.04

# install Nginx
RUN apt-get update && apt-get install -y \
    nginx \
    tzdata \
    && rm -rf /var/lib/apt/lists/*

ENV TZ=Asia/Tokyo

EXPOSE 80

COPY src/index.html /var/www/html/

# start Nginx
CMD ["nginx", "-g", "daemon off;"]

