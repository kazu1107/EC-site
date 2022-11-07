<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>購入画面</title>
    <!-- 購入ボタンのCSS -->
    <style type="text/css">
    .stripe-button-el {
        width: 350px;
        max-width: 100%;
    }
    .stripe-button-el span {
        font-size: 18px;
        padding-top: 15px;
        min-height: 60px!important;
    }
    </style>
</head>

<body>
    <form action="/charge.php" method="POST">
        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="pk_test_51M1QWLESx0kT4rkdIUVr3hXCQLL34VxGqEN2SZhPhuftVrTytGf0FFdZTj1sVE5UjdTE95t2vhoB1ZioY6yZ6H9l00w2CQqjnh"
        data-amount="100"
        data-name="この商品の料金は100円です"
        data-locale="auto"
        data-allow-remember-me="false"
        data-label="購入する"
        data-currency="jpy">
        </script>
    </form>
</body>
</html>
