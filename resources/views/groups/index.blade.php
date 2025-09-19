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
        <li>
            <a href="/">
                {{ $group->name }} ({{ $group->total_children_count }})
            </a>
        </li>
    @endforeach
</ul>
</body>
</html>
