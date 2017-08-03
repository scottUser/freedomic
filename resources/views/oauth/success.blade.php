<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>登陆成功</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        section {
            position: absolute;
            width: 300px;
            left: 50%;
            top: 50%;
            text-align: center;
            transform: translate(-150px, -150px);
        }

        section img {
            max-width: 80px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
<section>
    <p><img src="{{ asset('/img/fished.png') }}" alt=""></p>
    <h1>登录成功</h1>
</section>
</body>
<script>
    callback("{{ $openId }}", "{{ $nickname }}", "{{ $avatar }}");
    function callback(message, nickname, avatar) {
        typeof callbackObj == 'undefined' || callbackObj.showMessage(message, nickname, avatar)
    }
</script>
</html>