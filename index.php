<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Send Email</title>
    <link rel="stylesheet" href="../css/sendemail.css">
  </head>
  <body>
    <div id="container">
      <h1>Send Email</h1>
      <form class="" action="send.php" method="post">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="jujutsucorporation@gmail.com" required>
        </div>
        <div class="form-group">
          <label for="subject">Subject:</label>
          <input type="text" id="subject" name="subject" required>
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea id="message" name="message" required></textarea>
        </div>
        <div class="form-group">
          <button type="submit" name="send">Send</button>
        </div>
      </form>
    </div>
  </body>
</html>
