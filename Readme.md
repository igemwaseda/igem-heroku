# IGEM ウェブサイト開発
Outline
  - Installation
  - Setup
  - Attention

# Installation
 ```
 git clone https://github.com/igemwaseda/igem-heroku.git
 ```

 # Setup
 ```
 ~/laradock/
 docker-compose up -d workspace nginx mysql phpmyadmin
 curl localhost
 ```

# Attention
Please change mysql version into the current one on heroku server.
```
vim ~/laradock/mysql/Dockerfile
ARG MYSQL_VERSION=5.5
```

If you want to use heroku command in workspace container, you can add the following script in Dockerfile. The script automatically installs heroku command when you build the  workspace container.
```
vim ~/laradock/workspace/Dockerfile
#######################################################################
# install heroku command: 
#######################################################################
RUN curl https://cli-assets.heroku.com/install.sh | sh
```
