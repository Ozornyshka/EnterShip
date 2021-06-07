<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$profile = $_POST['profile'];
$token = "1756546736:AAE7hA7L-ZTDf_PYJmaTmaJN543LmPU0noI";
$chat_id = "-503863132";
$arr = array(
'Имя пользователя: ' => $name,
'Телефон: ' => $phone,
'Cсылка на профиль: ' => $profile,
);
$txt = '';
foreach($arr as $key => $value) {
$txt .= "<b>".$key."</b> ".$value."%0A";
};
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
?>
 <html lang='ru'>
      <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Спасибо за заказ!</title>
        <style>
          body{
            margin: 0;
            background: #43cea2;
            background: -webkit-linear-gradient(to right, #3F3939, #605A5A);
            background: linear-gradient(to right, #3F3939, #605A5A);
            height: 100vh;
            padding: 2rem;
            color: white;
            font-family: 'Open Sans', sans-serif;
            text-align: center;
            box-sizing: border-box;
            text-shadow: 0 1px 2px rgba(0,0,0,.1);
          }
          .content {
            position: absolute;
            width: 80%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            color: rgba(0, 0, 0, .75);
            -webkit-box-shadow: 0 0 8px 2px rgba(0,0,0,.2);
            -moz-box-shadow: 0 0 8px 2px rgba(0,0,0,.2);
            box-shadow: 0 0 8px 2px rgba(0,0,0,.2);
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            padding: 1rem;
            text-shadow: none;
          }
          @media screen and (min-width: 900px) {
            .content {
              max-width: 600px;
              padding: 2rem;
            }
          }
          .content ul {
            margin: 2rem 0;
            text-align: left;
          }
          .content button {
            padding: .5rem 1rem;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            color: white;
            background-color: #2BC0E4;
            border: none;
            -webkit-box-shadow: 0 0 8px 2px rgba(0,0,0,.2);
            -moz-box-shadow: 0 0 8px 2px rgba(0,0,0,.2);
            box-shadow: 0 0 8px 2px rgba(0,0,0,.2);
            text-shadow: 0 1px 2px rgba(0,0,0,.1);
          }
          .content button:hover {
            cursor: pointer;
            -webkit-transform: translateY(-1px);
            -moz-transform: translateY(-1px);
            -ms-transform: translateY(-1px);
            -o-transform: translateY(-1px);
            transform: translateY(-1px);
          }
        </style>

      </head>
      <body>
        <div class='content'>
          <h3>Ваша заявка принята</h3><p>Мы свяжемся с вами в течение 15 минут для подтверждения заказа. Пожалуйста, убедитесь, что ваш телефон <b> <?php echo htmlspecialchars($_POST['phone']); ?> </b> включен. </p> <p>Если вы ошиблись, вернитесь на страницу заказа и заполните форму еще раз!</p>
          <button onclick='location="./";'>Вернуться</button>

        </div>
      </body>
      </html>