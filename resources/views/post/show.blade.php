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
        .table{
          width: 80%;
        }
        .box{
            height: auto;
          /* width: 100%; */
          margin: 100px 500px 600px 100px;
        }
      </style>
</head>
<body>
    <main role="main" class="container">

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 box">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left"></h2>
                     
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Position</th>
                                <th>Status</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->position }}</td>
                            <td>{{ $data->status }}</td>
                            <td>{{ $data->description }}</td>

                        </tr>
                    </table>
    
                   <a href="{{ route('post.index') }}"><Button class="btn btn-primary">Back</Button></a>
    
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>