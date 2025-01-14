
```bash
cp .env.example .env
sail artisan key:generate
sail artisan telescope:install
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
- [+] update, `PUT /api/vendor/{id}`
- [+] destroy, `DELETE /api/vendor/{id}`

#### Вендоры/модель оборудования. Таблица `vendors_models`
URL: /api/vendor/models
- [+] index, `GET /api/vendor/model`
- [+] store, `POST /api/vendor/{vendor_id}}model/`
- [+] update, `PUT /api/vendor/{vendor_id}model/{id}`
- [+] destroy, `DELETE /api/vendor/{vendor_id}}model/{id}`

#### Виды профилактик оборудования. Таблица `profilactics`
URL: /api/profilactica/
- [+] index, `GET /api/profilactica/`
- [+] store, `POST /api/profilactica/`
- [+] update, `PUT /api/profilactica/{id}`
- [+] destroy, `DELETE /api/profilactica/{id}`

#### Организации. Таблица `organizations`
URL: /api/profilactica/
- [+] index, `GET /api/organization/`
- [+] store, `POST /api/organization/`
- [+] update, `PUT /api/organization/{id}`
- [+] destroy, `DELETE /api/organization/{id}`
