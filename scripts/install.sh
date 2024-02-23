#!/bin/bash
set -e

# Change the current directory to the script directory
pushd $(dirname $0) > /dev/null

ID=$(docker inspect --format="{{.Id}}" node_desafio)

docker exec -it $ID bash -c "npm install $1";

# Return to the previous directory
popd > /dev/null