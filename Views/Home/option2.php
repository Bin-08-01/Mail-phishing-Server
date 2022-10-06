<?php //unset($_SESSION['email'], $_SESSION['password']) ?>
<div id="home-contaier">
    <form action="?page=send" enctype="multipart/form-data" method="POST">
        <h1 style="text-align: center">Email</h1>
        <h3>Email</h3>
        <input type="text" class="form-control" name="emails" placeholder="Email" hidden>
        <div class="email-container">
        </div>
        <input type="text" class="form-control" name="email" placeholder="Email">

        <h3>Subject</h3>
        <input type="text" class="form-control" name="title" placeholder="Title">
        <textarea name="content" id="editor" class="form-control"></textarea>
        <script>
            CKEDITOR.replace('editor');
        </script>
        <h3>File đính kèm</h3>
        <input type="file" class="form-control" name="file">
        <button type="submit" class="btn btn-primary">Gửi</button>
    </form>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.0/classic/ckeditor.js"></script>
<style>
    #home-contaier{
        border: 1px solid #000;
        padding: 4px 40px;
        border-radius: 20px;
        background-color: #999999;
    }
    .email-container{
        display: flex;
    }
    .email-container div{
        display: inline-block;
        background-color: #ffffff;
        border-radius: 10px;
        padding: 4px;
    }
</style>