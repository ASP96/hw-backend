
```bash
cp .env.example .env
sail artisan key:generate
```

```bash
docker context use desktop-linux
chown -R www-data:www-data storage
chown -R 777 storage
```


### Сделанные контроллеры

#### Вендоры (названия брендов производителей). Таблицы `vendors`
URL: /api/vendor/
- [+] index, `GET /api/vendor/`
- [+] store, `POST /api/vendor/`
- [+] update, `POST /api/vendor/{id}`
- [+] destroy, `DELETE /api/vendor/{id}`

#### Вендоры/модель оборудования. Таблица `vendors_models`
URL: /api/vendor/models
- [+] index, `GET /api/vendor/model`
- [+] store, `POST /api/vendor/`
- [+] update, `POST /api/vendor/{id}`
- [+] destroy, `DELETE /api/vendor/{id}`