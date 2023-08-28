<head>
  <link rel="stylesheet" href="chat.css">
  <?php
 require_once '../header.php';
  ?>
</head>
<div class="chatAgent">
    <section id="liveChat">

        <div class="chat_container">

<!-- 1 -->
        <section class="chat_monitor">
        <span>
        <img id="admin_icon" src="../icons/email_center.png" alt="admin">
         <i id="chat_effect"></i>
         <h3>Help Desk</h3>
        </span>

        <span>
        <i id="close_chat" class="fa-solid fa-circle-xmark"></i>
        </span>
        </section>
<!-- 2 -->
        <section class="chatbox_content">
        <div id="loadChats">
        <p class="chat_admin" id="admin_response"></p>
        </div>
        

        <div class="input_container">
            <input type="text" id="chat_input" placeholder="Chat box">
            <button id="chat_submit">Enter</button>
        </div>
        </section>
<!-- 3 -->
        <section class="chat_bottom">
            <p id="page_bottom"></p>
        </section>

        </div>
    </section>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="chat.js"></script>
    <script src="responder.js"></script>