# Test Backend ANF AC

```
1. composer install
2. php artisan migrate
3. php artisan passport:install
4. php artisan serve
```

# Deploy
php artisan passport:keys

# Endpoints
1. `/api/users  [GET]`
2. `/api/users [POST]` 
3. `/api/users/{id} [PUT]`
4. `/api/users/{id} [DELETE]`

#Tasks
1. Crear un proyecto de Laravel con las clases necesarias para almacenar la tabla creada para el frontend.
2. Crear un API para agregar/modificar/eliminar y listar las personas.
3. Instalar passport en Laravel para gestionar la autenticación con oauth2 para todas las funciones de la API con metodo "client credentials".