<?php //unset($_SESSION['email'], $_SESSION['password']) ?>
<form action="?page=send" enctype="multipart/form-data" method="POST">
    <h1>Email tới bạn</h1>
    <p>Email</p>
    <input type="text" class="form-control" name="email" placeholder="Email">
    <p>Subject</p>
    <input type="text" class="form-control" name="title" placeholder="Title">
    <textarea name="content" id="editor" class="form-control"></textarea>
    <script>
        CKEDITOR.replace('editor');
    </script>
    <p>File đính kèm</p>
    <input type="file" class="form-control" name="file">
    <button type="submit" class="btn btn-primary">Gửi</button>
</form>
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>