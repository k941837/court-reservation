<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>柴島サイト</title>
    <meta name="description" content="テニスコートの予約ページになります" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    <script type="text/javascript" src="../bootstrap-5.1.0-dist/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="../bootstrap-5.1.0-dist/js/bootstrap.js"></script>
</head>

<style>
    header {
        margin-bottom: 50px;
    }
</style>

<body>
    <main>
        <div class="container">

            {if isset($infomation_text)}
            {include file='infomation.tpl'
            infomation_text = $infomation_text
            }
            {/if}

            <h2>ログインページ</h2>
            <form action="login_check.php" method="post">
                <div>
                    <label>メールアドレス：<label>
                    <input type="text" name="mail" required>
                </div>
                <div>
                    <label>パスワード：<label>
                    <input type="password" name="pass" required>
                </div>
                <input type="submit" value="ログイン">
            </form>

        </div>

    </main>





    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2020-2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
    <script src="../../assets/js/vendor/holder.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="/docs/4.3/assets/js/vendor/anchor.min.js"></script>
    <script src="/docs/4.3/assets/js/vendor/clipboard.min.js"></script>
    <script src="/docs/4.3/assets/js/vendor/bs-custom-file-input.min.js"></script>
    <script src="/docs/4.3/assets/js/src/application.js"></script>
    <script src="/docs/4.3/assets/js/src/search.js"></script>
    <script src="/docs/4.3/assets/js/src/ie-emulation-modes-warning.js"></script>
</body>

</html>