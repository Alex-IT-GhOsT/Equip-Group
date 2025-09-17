<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список групп</title>
</head>
<body>
<h1>Группы товаров</h1>

<ul>
    @foreach($groups as $group)
        <li>{{ $group->name }} {{ $group->children_count }} </li>
    @endforeach
</ul>
</body>
</html>
