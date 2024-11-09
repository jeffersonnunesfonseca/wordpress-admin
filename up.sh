#!/bin/bash

# Verifica se a pasta db_data existe
if [ ! -d "db_data" ]; then
  echo "A pasta db_data não existe. Criando a pasta..."
  mkdir db_data
  echo "Pasta db_data criada com sucesso."
else
  echo "A pasta db_data já existe."
fi

# Sobe os contêineres
docker compose up -d --build --force-recreate --remove-orphans

# Nome da rede
NETWORK_NAME="visualization-exams-compose_default"

# Verifica se a rede existe
if docker network ls | grep -q "$NETWORK_NAME"; then
  echo "Rede $NETWORK_NAME encontrada. Conectando contêineres à rede..."
  
  # Conecta cada contêiner à rede
  docker network connect "$NETWORK_NAME" wpit-db || echo "wpit-db já está conectado ou houve um erro."
  docker network connect "$NETWORK_NAME" it-wp || echo "it-wp já está conectado ou houve um erro."
else
  echo "Rede $NETWORK_NAME não encontrada. Nenhuma ação adicional será tomada."
fi
