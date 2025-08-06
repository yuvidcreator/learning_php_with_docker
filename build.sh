#!/bin/bash

# Colors for status messages
GREEN='\033[0;32m'
NC='\033[0m' # No Color

docker builder prune -af

# Build container (one-time builder, & keep running in background)
docker-compose -f ./docker-compose.yml up -d --build