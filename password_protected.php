<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>広高校攻略wiki</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="https://media.discordapp.net/attachments/1140940763346243688/1141195777641816175/image.png" type="image/png">
</head>
<body>
  <?php
  if(isset($_POST['password']) && $_POST['password'] === 'hiroapp'){ // 'your_password' を実際のパスワードに置き換える
  ?>
    <header class="site-header">
      <!-- ヘッダーコンテンツ -->
    </header>

    <section class="hero-section">
      <!-- ヒーローセクションのコード -->
    </section>

    <footer class="site-footer">
      <!-- フッターコンテンツ -->
    </footer>
  <?php
  } else {
  ?>
    <form action="" method="POST">
      <label for="password">パスワード：</label>
      <input type="password" id="password" name="password" required>
      <input type="submit" value="ログイン">
    </form>
  <?php
  }
  ?>
</body>
</html>
