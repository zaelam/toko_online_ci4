<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
    <?php 
        $username = [
            'name' => 'username',
            'id' => 'username',
            'value' => null,
            'class' => 'form-control'
        ];

        $password = [
            'name' => 'password',
            'id' => 'password',
            'class' => 'form-control'
        ];

        $repeatPassword = [
            'name' => 'repeatPassword',
            'id' => 'repeatPassword',
            'class' => 'form-control'
        ];
        $session = session();
        $errors = $session->getFlashdata('errors');
    ?>
    <div class="row">
        <div class="mt-4 col-md-6 offset-3">
            <?php if ($errors != null): ?>
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Terjadi Kesalahan</h4>
                    <hr>
                    <p class="mb-0">
                        <?php 
                            foreach ($errors as $err) {
                                echo $err.'<br>';
                            }
                        ?>
                    </p>
                </div>
            <?php endif ?>
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <h5 class="card-header">Form Register</h5>
                <div class="card-body">
                <?= form_open('Auth/register') ?>
                <div class="form-group">
                    <?= form_label("Username", "username") ?>
                    <?= form_input($username) ?>
                </div>
                <div class="form-group">
                    <?= form_label("Password", "password") ?>
                    <?= form_password($password) ?>
                </div>
                <div class="form-group">
                    <?= form_label("Repeat Password", "repeatpassword") ?>
                    <?= form_password($repeatPassword) ?>
                </div>
                <div class="text-right">
                    <?= form_submit('submit', 'Submit',['class'=>'btn btn-primary']); ?>
                </div>
        <?= form_close() ?>
<?= $this->endSection() ?>