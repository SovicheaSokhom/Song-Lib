#!/usr/bin/env sh

protoc --proto_path=app/Proto --php_out=app/Proto/build $1