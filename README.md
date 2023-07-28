Можете подключить к свой базе данных (с routes/api.php тогда осторожней) можете создать отдельную базу данных и простестировать на ней.

Тут Вам важны следущие файлы:

app/Http/Controllers/Api/v1/NoteController.php
app/Http/Controllers/Api/v1/NotelistController.php

app/Http/Requests/NoteListStoreRequest.php
app/Http/Requests/NoteStoreRequest.php

app/Http/Resources/NoteListResource.php
app/Http/Resources/NoteResource.php

app/Model/Note.php
app/Model/Noteslist.php

app/Providers/RouteServicePovider.php

database/migrations/2023_07_26_112135_create_notes_table.php

database/migrations/2023_07_27_084800_create_noteslists_table.php

routes/api.php

Надеюсь ничего не забыл...

После того как скачаете и вставите файлы надо будет провести миграцию (php artisan migrate)

Тестил я все это добро в postman.
для проверки надо в строку после public вбить api/v1/notes (будет показанна первая таблица + связанные с ней) либо api/v1/notelist (будет показана только вторая таблица)

Далее у меня тут две таблички (я посчитал что такое будет лучше т.к. в первой ничего не меняется а вот вторая может дополнятся, изменятся и т.д. и т.п.):
Первая: Имя, Фотография, Дата Рождения;
Вторая: Компания, Телефон, Email


