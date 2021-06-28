
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="img/logo.png">
  <title>BlackChat</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  
  <link href="https://www.jqueryscript.net/demo/Emoji-Picker-jQuery-Twemoji/src/jquery.lsxemojipicker.css" rel="stylesheet">
  <script src="https://twemoji.maxcdn.com/2/twemoji.min.js" 
        integrity="sha384-vojMYWMgmEhE4UFyXarYAx15WrGwFWfYep8svrRf1anCUzrYn9xlhuXrK9fgsixc" 
        crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" 
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
        crossorigin="anonymous">
</script>

<script src="https://www.jqueryscript.net/demo/Emoji-Picker-jQuery-Twemoji/src/jquery.lsxemojipicker.js"></script>
  
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-H74CN16WKL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-H74CN16WKL');
</script>

</head><body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="php/images/noAvatar.png" alt="">
        <div class="details">
          <span>Unknown </span>
          <p style="font-size:14px;">Online</p>
        </div>
      </header>
      <div class="chat-box">
      </div>
      <form action="#" class="typing-area">
        <div style="display:none;"></div>
        <il style="cursor: pointer;margin-top:11px;">😀</il><input emoji="true" type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off"><input type="text" class="incoming_id" name="incoming_id" value="1190664343" hidden>
        <button><i class="fab fa-telegram-plane"></i></button></input>
      </form>
    </section>
  </div>
  </script>
    <script src="fgEmojiPicker.js"></script>
    <script>
        const emojiPicker = new FgEmojiPicker({
            trigger: ['il'],
            removeOnSelection: false,
            closeButton: true,
            position: ['top', 'right'],
            preFetch: true,
            insertInto: document.querySelector('input'),
            emit(obj, triggerElement) {
                console.log(obj, triggerElement);
            }
        });
    </script>
  <script src="javascript/chat.js"></script>
</html>
