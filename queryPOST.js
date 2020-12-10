
/*
//после загрузки DOM-дерева страницы
document.addEventListener("DOMContentLoaded", () => {
  //получить кнопку
  let btn = document.getElementById('send')
  //подписаться на событие click по кнопке и назначить обработчик, который будет выполнять действия, указанные в безымянной функции
  btn.addEventListener("click", () => {
    //1. Сбор данных, необходимых для выполнения запроса на сервере
    let name = document.getElementById('name').value
    let surname = document.getElementById('surname').value
    let patronymic = document.getElementById('patronymic').value
    let email = document.getElementById('email').value
    let address = document.getElementById('address').value
    // Блок с текстовым вывода проверки на ошибки
    let error = document.getElementById('error')
    // Условие, с выводом проверки на ошибки
    if(name === '') {
      error.innerText = 'Вы не написали своё имя'
      return false
    }
    else if(surname === '') {
      error.innerText = 'Вы не написали свою фамилию'
      return false
    }
    else if(patronymic === '') {
      error.innerText = 'Вы не написали своё отчество'
      return false
    }
    else if(email === '') {
      error.innerText = 'Вы не написали свой email'
      return false
    }
    else if(address === '') {
      error.innerText = 'Вы не написали свой адрес'
      return false
    }
    // Конец условия

    //Подготовка данных для отправки на сервер
    //т.е. кодирование с помощью метода encodeURIComponent
    name = 'name' + encodeURIComponent(['name'])
    surname = 'surname' + encodeURIComponent(['surname'])
    patronymic = 'patronymic' + encodeURIComponent(['patronymic'])
    email = 'email' + encodeURIComponent(['email'])
    address = 'address' + encodeURIComponent(['address'])
    // 2. Создание переменной ajax
    let ajax = new XMLHttpRequest()
    // 3. Настройка запроса
    ajax.open('POST','Controllers/Add.php', true)
    // 4. Подписка на событие onreadystatechange и обработка его с помощью анонимной функции
    ajax.addEventListener('readystatechange', () => {
      //если запрос пришёл и статус запроса 200 (OK)
      if ((ajax.readyState == 4) && (ajax.status == 200)) {
        // например, выведем объект XHR в консоль браузера
        console.log(ajax)
        // и ответ (текст), пришедший с сервера в окне alert
        console.log(ajax.responseText)
        // получить элемент c id = welcome
        let welcome = document.getElementById('welcome')
        // заменить содержимое элемента ответом, пришедшим с сервера
        welcome.innerHTML = ajax.responseText
      }
    })
    // Устанавливаем заголовок Content-Type(обязательно для метода POST). Он предназначен для указания кодировки, с помощью которой зашифрован запрос. Это необходимо для того, чтобы сервер знал как его раскодировать.
    ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded',
        "Access-Control-Allow-Origin: {$_SERVER['/Controllers/Add.php']}")
    // 5. Отправка запроса на сервер. В качестве параметра указываем данные, которые необходимо передать (необходимо для POST)
    ajax.send(name, surname, patronymic, email, address)
  })
})

*/


window.onload = ()=> {

    let name = document.querySelector('input[name=name]');
    let surname = document.querySelector('input[name=surname]');
    let patronymic = document.querySelector('input[name=patronymic]');
    let email = document.querySelector('input[name=email]');
    let address = document.querySelector('input[name=address]');

    document.getElementById('send').onclick = () => {

        let options = 'name=' + name.value + '&' + 'surname=' + surname.value + '&' + 'patronymic=' + patronymic.value + '&' + 'email=' + email.value + '&' + 'address=' + address.value + '&';
        requestPost(options);
    }


    function requestPost(options) {
        let request = new XMLHttpRequest();
        request.onreadystatechange = () => {
            if (request.readyState === 4 && request.status === 200) {
                console.log(request.status + 'Данные успешно переданы')
            } else {
                console.log(request.status + ' Данные успешно не переданы')
            }
        }

        request.open('POST', '/Add.php', true);
        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        request.send(options);
    }
}



