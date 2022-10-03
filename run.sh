#!/usr/bin/env bash

echo ""
echo "Website"
echo ""

echo "Docker - Iniciando contêiners"
docker-compose up -d

echo ""
echo "Docker - Contêiners iniciados"

echo ""
echo "Laravel - Copiando arquivo .env"
docker exec -t website_site cp .env.example .env

echo ""
echo "Laravel - Instalando dependências"
docker exec -t website_site composer install

echo ""
echo "Laravel - Gerando chave criptografada"
docker exec -t website_site php artisan key:generate

#echo ""
#echo "Laravel - Executando migrations"
#docker exec -i asa_site php artisan migrate --database=mysql_root

#echo ""
#echo "Laravel - Executando seeds"
#docker exec -i asa_site php artisan db:seed

#echo ""
#echo "Laravel - Executando testes unitários"
#docker exec -i asa_site ./vendor/bin/phpunit

#echo ""
#echo "Laravel - Executando fila"
#docker exec -t asa_site php artisan queue:work --tries=3

echo ""
echo "Finalizado"
docker ps -a
