#!/bin/bash

# Verifica se a pasta db_data existe
if [ ! -d "db_data" ]; then
  echo "A pasta db_data não existe. Criando a pasta..."
  mkdir db_data
  echo "Pasta db_data criada com sucesso."
else
  echo "A pasta db_data já existe."
fi

docker compose up -d --build --force-recreate --remove-orphans