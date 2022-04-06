<?= $this->extend('base') ?>

<?= $this->section('content') ?>
    <form action="/todos/<?= $data['id'] ?>/update" method="post">
        <input type="hidden" name="_method" value="put" />
        <label for="title">Todo list</label>
        <br />
        <input type="varchar" id="title" placeholder="Input tile" name="title" />
        
        <br />
        <br />
        <label for="description">description</label>
        <br />
        <input type="text" id="description" placeholder="Input description" name="description" />

        <br /> 
        <br />
        <label for="finished_at">finished</label>
        <br />
        <input type="datetime" id="finished_at" placeholder="Input finished" name="finished_at" />
        

        <br />
        <br />
        <button type="submit">SUBMIT</button>
    </form>
<?= $this->endSection() ?>
