## ( QA -> QA-Dev ) || (QA -> Junior Backend Developer)
Экспресс курс, который в короткий срок позволит стать автоматизатором или разработчиком.
При этом придётся приложить титаническое количество усилий и очень многое изучить самостоятельно.
Со временем я планирую добавить больше полезных ссылок, материалов и комментариев.

Хотите показать выполнение своих заданий? Use the Fork, Luke.

### Скачать репозиторий
```bash
git clone https://github.com/webcoder-club/php-qa.git
```

### Установить PHP последней версии, в данном случае 7.2:
```bash
brew update
brew install php72
brew install composer
```

### Установить зависимости?
```bash
cd php-qa
composer install
```

### Что я сделал для того, чтобы сохранить зависимости в composer.lock?
```bash
require --dev phpunit/phpunit ^7.0
```

### План
По всем темам необходимо ответить на вопросы "Зачем" необходим тот или иной подход и технология и какие плюсы и минусы. 

[Урок #1](src/Day1/Lesson.md)

[Урок #2](src/Day2/Lesson.md)

[Урок #3](src/Day3/Lesson.md)

### Что осталось доделать?
- [x] Написать решения всех заданий.
- [ ] Привести к единому CodeStyle и подходам.
- [ ] Написать комментарии к решениям заданий.
- [ ] Написать несколько решениий к заданий.
- [ ] Перед следующим курсом скрыть выполненные задания.
- [ ] Больше расписать в Lesson.md файлах глубину погружения.