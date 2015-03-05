docker build -f="Dockerfile-dev" -t docker-dcyclesite .
docker run -d -p 80:80 docker-dcyclesite
