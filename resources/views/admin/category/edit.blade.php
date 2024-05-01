<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <div class="d-flex justify-content-center p-2 m-2">
        <div class="card p-2 w-50">
            <div class="d-flex justify-content-between">
                <div class="">
                    <h3>Edit {{ $category->name }} </h3>
                    
                </div>
                <div class="">
                 </div>
            </div>
            <hr class="my-1">
            <form action="{{ route('category.update',$category->id)  }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                      <label for="">Nama: </label>
                      <input type="text" name="name">
                      </div>
                </div>
               
                <div class="my-2">
                    <button type="submit" class="btn btn-success w-100">Update</button>
                </div>
            </form>  
          </div>
    </div>
</body>

</html> 