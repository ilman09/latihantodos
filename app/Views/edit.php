<?= $this->extend('base') ?>

<?= $this->section('content') ?>
    <form action="/todos/<?= $data['id'] ?>/update" method="post">
        <input type="hidden" name="_method" value="put" />
        
        <div class="form-group">
        <label for="title">input</label>
        <input type="varchar" id="title" placeholder="Input title" name="title" class="form-control" aria-describedby="emailHelp" />
        </div>

        <div class="form-group">
        <label for="description">description</label>
        <input type="text" id="description" placeholder="Input description" name="description" class="form-control" aria-describedby="emailHelp"/>
        </div>

        <div class="form-group">
        <label for="finished_at">finished</label>
        <input type="datetime" id="finished_at" placeholder="Input finished" name="finished_at" class="form-control" aria-describedby="emailHelp"/>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
<?= $this->endSection() ?>
