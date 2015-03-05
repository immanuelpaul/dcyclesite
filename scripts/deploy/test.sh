# Our Dockerfile needs to be named "Dockerfile" because we are using CircleCI
# and it does not allow us to use the -f flag to specify another filename (for
# example Dockerfile-test), at the time of this writing.
docker build .
