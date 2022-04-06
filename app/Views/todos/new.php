<?= $this->extend('base') ?>

<?= $this->section('content') ?>
    <form action="/todos/create" method="post">
        <label for="title">To-Do list</label>
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
        <button type="submit">Submit</button>
    </form>
<?= $this->endSection() ?>