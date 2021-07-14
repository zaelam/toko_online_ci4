<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row mt-4">
    <div class="col-12">
        <h1>User</h1>
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Username</th>
                <th>Created By</th>
                <th>Created Date</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php foreach($data['users'] as $index=>$user): ?>
                    <tr>
                        <td><?= $user->id ?></td>
                        <td><?= $user->username ?></td>
                        <td><?= $user->created_by ?></td>
                        <td><?= $user->created_date ?></td>
                        <td>
                            <a href="<?= site_url('user/update/'.$user->id) ?>" class="btn btn-primary">Update</a>
                            <a href="<?= site_url('user/delete/'.$user->id) ?>" class="btn btn-danger text-white">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <div class="float-right">
            <?= $data['pager']->links('default', 'custom_pagination') ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>