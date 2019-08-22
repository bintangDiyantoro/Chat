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