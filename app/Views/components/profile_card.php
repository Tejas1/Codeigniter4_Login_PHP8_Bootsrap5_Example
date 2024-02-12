<div class="container mb-4">
    <div class="mb-3 jumbotron">
        <h1 class="display-4">Hello, <?= session('name') ?>!</h1>
        <hr class="my-4">
        <ul class="list-group">
            <li class="list-group-item">id: <?= session('id') ?></li>
            <li class="list-group-item">email: <?= session('email') ?></li>
        </ul>
    </div>

    <div class="mb-3 text-center">
        <?= form_open('/logout') ?>
            <button type="submit" class="btn btn-info">Logout</button>
        </form>
    </div>
</div>
