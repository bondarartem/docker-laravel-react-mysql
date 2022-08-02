## Локальный запуск
где `${CONTAINER_NAME}` - название контейнера
```shell script
docker-compose -f docker-compose.yml up #Собираем и запускаем контейнеры
```
Также необходимо прописать в hosts
```shell script
127.0.0.1 ${CONTAINER_NAME}
```
После команды в вебе будут доступны:
- ${CONTAINER_NAME}:80 - [React](http://localhost:80)
- ${CONTAINER_NAME}:8000 - [Laravel](http://localhost:8000)
- ${CONTAINER_NAME}:8443 - [phpMyAdmin](http://localhost:8443)

### Применение команд внутри контейнеров
Запустить миграции (где ${CONTAINER_NAME} - название контейнера):
```shell script
docker exec -it ${CONTAINER_NAME}-back php artisan migrate

# или

docker exec -it ${CONTAINER_NAME}-back bash
php artisan migrate
```
Запустить сборку фронта
```shell script
docker exec -it ${CONTAINER_NAME}-front npm run build

# или

docker exec -it ${CONTAINER_NAME}-front bash
npm run build
```
