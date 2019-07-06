<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Проверь себя</title>
</head>
<body>

<?php include("header.php"); ?>

<main>
    <div>
        <h2>Заполните вашу персональную карту!</h2>
        <p>Ввод только на русском!</p>
        <form action="results.php" method="get">
            <div>
                <label>Фамилия: <br><input type="text" name="surname" pattern="^[А-Яа-яЁё]+$" required></label><br>
                <label>Имя: <br><input type="text" name="name" pattern="^[А-Яа-яЁё]+$" required></label><br>
                <label>Отчество: <br><input type="text" name="father" pattern="^[А-Яа-яЁё]+$"></label><br>
            </div>
            <div>
                Место жительства:<br>
                <label>Страна:<br>
                    <input type="text" name="country" pattern="^[А-Яа-яЁё]+$"></label><br>
                <label>Регион: <br>
                    <input type="text" name="region" pattern="^[А-Яа-яЁё]+$"></label><br>
                <label>Город: <br>
                    <input type="text" name="town" pattern="^[А-Яа-яЁё]+$"></label><br>
            </div>
            <div>
                <label>Дата рождения(год, месяц, день):<br>
                    <input type="date" name="date" required></label><br>
                <label>Пол:
                    <input name="sex" type="radio" value="male">М <input name="sex" type="radio" value="female" required>Ж </label><br>
                <label>Профессия:<br>
                    <input type="text" name="profession" pattern="^[А-Яа-яЁё]+$"></label><br>
            </div>
            <div>
                <label>Рост(см):<br>
                    <input type="text" name="growth" pattern="^[ 0-9]+$" required></label><br>
                <label>Вес(кг):<br>
                    <input type="text" name="weight" pattern="^[ 0-9]+$" required></label><br>
                <label>Окружность грудной клетки(см):<br>
                    <input name="chest" type="text" pattern="^[ 0-9]+$"></label><br>
                <label>Окружность талии(см): <br>
                    <input name="waist" type="text" pattern="^[ 0-9]+$"></label><br>
            </div>
            <table>
                <tr><td>№</td><td>Тесты</td><td>Описание Всемирных тестов</td> <td>Результаты</td><td>Образец заполнения</td></tr>
                <tr><td>1</td><td>Сгибание и разгибание рук в упоре лежа (отжимание) (кол-во раз)</td>
                    <td>Исходное положение: упор лежа, голова–туловище–ноги
                        составляют прямую линию. Сгибание рук выполняется до
                        касания грудью пола или предмета высотой не более 5 см, не
                        нарушая прямой линии тела. Разгибание производится до
                        полного выпрямления рук, при сохранении прямой линии тела.
                        Пауза между повторениями не должна превышать 3 секунд.
                        Фиксируется количество отжиманий в одной попытке.</td><td><input type="text" name="firstnorm" pattern="^[ 0-9]+$"></td> <td>12</td></input></tr>
                <tr><td>2</td><td>Прыжок в длину
                        с места</td><td>Выполняется двумя ногами от стартовой линии с махом рук.
                        Длина прыжка с трех попыток измеряется в сантиметрах от
                        стартовой линии до ближнего касания к стартовой линии
                        ногами участника.</td><td><input type="text" name="secondnorm" pattern="^[ 0-9]+$"><td>190</td></td></tr>
                <tr><td>3</td> <td>Поднимание туловища
                        из положения лежа на
                        спине(кол-во раз)</td><td>Исходное положение: лежа на спине руки за головой, ноги
                        согнуты в коленях под углом 90 градусов, ступни закреплены.
                        Фиксируется количество выполненных упражнений до касания
                        локтями коленей в одной попытке за 30 секунд.</td><td><input type="text" name="thirdnorm" pattern="^[ 0-9]+$"></td><td>12</td></tr>
                <tr><td>4</td> <td>Удержание тела в висе
                        на перекладине (с)</td><td>Участник принимает положение виса, хватом сверху так,
                        чтобы его подбородок находился над перекладиной. После
                        этого включается секундомер, когда под влиянием утомления
                        руки начинают распрямляться и подбородок опустится ниже
                        перекладины, выполнение теста прекращается.
                    </td><td><input type="text" name="fourthnorm" pattern="^[ 0-9]+$"></td><td>7</td></tr>
                <tr><td>5</td><td>Наклон вперед из
                        положения сидя (+см)</td><td>На полу обозначить центровую и перпендикулярную линии.
                        Сидя на полу, ступнями ног следует касаться
                        перпендикулярной линии, ноги выпрямлены в коленях, ступни
                        вертикальны, расстояние между ними составляет 20–30 см.
                        Выполняется 3 наклона вперед, на 4-ом фиксируется результат
                        на центровой мерной линии при касании ее кончиками
                        пальцев, при этом руки удерживаются на фиксируемом
                        результате не менее 2-х секунд. Перпендикулярная линия
                        является нулевой отметкой. Если участник не дотягивается до
                        нулевой отметки, его результат фиксируется со знаком минус.
                        Если участник преодолевает перпендикулярную линию,
                        результат фиксируется со знаком плюс. Сгибание ног в
                        коленях не допускается.</td><td><input type="text" name="fifthnorm" pattern="^[ 0-9]+$"></td><td>2</td></tr>
                <tr><td>6</td><td>Бег 1000м(с)</td><td>Бег на расстояние на 1000м на время.</td><td><input type="text" name="sixthnorm" pattern="^[ 0-9]+$"></td><td>300</td></tr>
            </table>
            <input type="submit" name="submit" value="Подтвердить">
        </form>
    </div>
</main>

<?php include("footer.php"); ?>

</body>
</html>