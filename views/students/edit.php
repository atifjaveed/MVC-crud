
<?php

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Edit Page</title>
  </head>
  <body>
    <div class="container-fluid">
    <div class="row">
       <h1 class="text-center bg-secondary">update</h1>
      <div class="col-5 mx-auto bg-dark p-5">
      <form method='post' action='/students/<?= $data['student']->id ?>/update'>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-white h2">first name</label>
            <input type="text" value="<?php echo $data['student']->first_name ?>" name='first_name' class="form-control p-3"  id="first_name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label text-white h2">last name</label>
            <input type="text" value="<?php echo $data['student']->last_name ?>" name="last_name"  class="form-control p-3" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label text-white h2">cours</label>
            <input type="text" value="<?php echo $data['student']->course  ?>" name="course" class="form-control p-3" id="exampleInputPassword1">
        </div>
        <button type="submit"  class="btn btn-primary">Submit</button>
        <button type="back"  class="btn btn-primary">back</button>
      </form> 
      </div>
     </div>
    </div>
  </body>
</html>


