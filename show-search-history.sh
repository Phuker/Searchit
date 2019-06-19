#!/bin/bash

docker-compose exec web tail -n 200 -f /tmp/searchit.log

