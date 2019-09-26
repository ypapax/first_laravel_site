#!/usr/bin/env bash
set -ex
set -o pipefail

generate(){
  laravel new first_laravel_site
}

dev(){
  php artisan serve
}

"$@"
