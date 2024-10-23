<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Students</title>
    </head>
    <body>
       <div class="container-fluid">
       <div class="row">
            <h1 class="text-center bg-secondary">MVC CRUD</h1>
        <div class="col-md-5 bg-dark p-5">
          <form method='post' action='/students/save'>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label text-white  h2">first name</label>
                  <input type="text"  name='first_name' class="form-control p-3" placeholder="first name" id="first_name" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label text-white  h2">last name</label>
                  <input type="text"  name="last_name"  class="form-control p-3" placeholder="last name" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label text-white  h2">cours</label>
                  <input type="text" name="course" class="form-control p-3" placeholder="course" id="exampleInputPassword1">
              </div>
              <button type="submit"  class="btn btn-primary">Submit</button>
          </form> 
        </div>
        <div class='col-md-7'>
          
          <table class="table table-hover table-dark table-bordered table-striped" >
              <thead>
                  <tr class="text-center">
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Course</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach($data['data'] as $student): ?>
                      <tr class="text-center">
                          <td><?= $student->first_name ?>
                          <td><?= $student->last_name ?>
                          <td><?= $student->course ?>
                          <td>
                              <a class="bg-primary text-decoration-none text-white p-2 fw-bold rounded" href="students/<?= $student->id ?>/edit">edit</a>
                              <a class="bg-danger text-decoration-none text-white p-2 fw-bold rounded" href="students/<?= $student->id ?>/delete">delete</a>
                          </td>
                      </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>  
        </div>
        
        </div>
       </div>
    </body>
</html>