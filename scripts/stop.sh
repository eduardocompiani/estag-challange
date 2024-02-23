#!/bin/bash
set -e

# Change the current directory to the script directory
pushd $(dirname $0) > /dev/null

cd ..
docker compose down

# Return to the previous directory
popd > /dev/null