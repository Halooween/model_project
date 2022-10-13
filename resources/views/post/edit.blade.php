<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
             .update{
        margin-left:100px;
    }
      form{
        height: auto;
        width: 60%;
        margin: 100px;
      }
    </style>
</head>
<body>
    <main role="main" class="container">

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 form">
                    <h2 class="mt-5 update">Update Post</h2>
                    <form action="{{ route('post.update',$data) }}" method="post" >
                        @method('PUT')
                        @csrf 
                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" name="position" class="form-control " value="{{ $data->position }}" >
                        </div>
                        <div class="form-group">
                            <div class="radio">Status<br>
                                <label><input type="radio" name="status" value="1" {{ $data->status == '1'? 'checked':'' }} checked> active</label>
                                <label><input type="radio" name="status" value="0" {{ $data->status == '0'? 'checked':'' }}> offline</label>
                            </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" placeholder="write something.."  >{{ $data->description }}</textarea>

                        </div>
                        <input type="submit" name="create" class="btn btn-primary" value="Submit">
                        <a href="{{ route('post.index') }}" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
    </main>
</body>
</html>


