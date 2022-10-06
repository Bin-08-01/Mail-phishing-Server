<?php if(isset($_SESSION['email'], $_SESSION['password'])){ ?>
    <nav>
    <div class="home-div">
        <a href="?page=home"><h3>HOME</h3></a>
    </div>
    <div class="user-info">
    <span><?php echo $_SESSION['email'] ?? "";?></span>
    <a href="?page=logout"><h3>Đăng xuất</h3></a>
    </div>
    </nav>
<?php } ?>
<style>
    nav{
        display: flex;
        position: fixed;
        z-index: 2;
        left: 0;
        right: 0;
        top: 0;
        align-items: center;
        justify-content: space-between;
        background-color: black;
        border-bottom: 1px solid #999;
        padding: 8px 0;

    }
    nav *{
        color: #ffffff;

    }
    nav .home-div{
        margin-left: 16px;
    }
    nav .user-info{
        display: flex;
    }
    nav .user-info span{
        margin-right: 12px;
    }
    nav .user-info a{
        margin-right: 16px;
        color: #ffffff;
    }
</style>

