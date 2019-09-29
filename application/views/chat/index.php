    <h1>Halo <?= $user ?>!</h1>
    <div class="jumbotron jumbotron-fluid">
        <div class="container chat-content">
        </div>
    </div>
    <form action="" method="">
        <div class="form-group">
            <input type="hidden" name="name" value="<?= $user ?>">
            <textarea class="form-control" name="content" id="content" rows="3" autofocus></textarea>
            <button type="button" name="submit" class="btn btn-primary send">Send</button>
        </div>
    </form>

    <a href="<?= base_url('chat/logout') ?>" class="btn btn-danger justify-align-right">Logout</a>