    <h1>Halo <?= $user ?>!</h1>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <table class="table table-striped">
                <tbody>
                    <?php foreach ($contents as $content) : ?>
                    <tr>
                        <td><?= $content['name']; ?></td>
                        <td><?= $content['content']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <form action="<?= base_url('chat/send') ?>" method="post">
        <div class="form-group">
            <input type="hidden" name="name" value="<?= $user ?>">
            <textarea name="content" id="content" cols="74" rows="3"></textarea>
            <button type="submit" name="submit" class="btn btn-primary">Send</button>
        </div>
    </form>

    <a href="<?= base_url('chat/logout') ?>" class="btn btn-danger justify-align-right">Logout</a>