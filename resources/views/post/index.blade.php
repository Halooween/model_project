<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      .table{
        height: auto;
        width: 100%;
        /* margin: 100px; */
      }
     

    </style>
</head>
<body>
  
    <main role="main" class="container">

            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mt-5 mb-3 clearfix buttons">
                                <h2 class="pull-left">Posts</h2>
                                <a href="{{ route('post.create') }}" class="btn btn-success pull-right">Add New records</a>
                                <a href="{{ route('post.restore') }}"  style='margin-right:16px' class="btn btn-info pull-right">Restore</a>
                            </div>

                            <table class="table table-bordered table-striped " id="table_id">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Position</th>
                                        <th>Status</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach ($data as $datas)
                                
                                <tr>
                                <td>{{ $datas->id }}</td>
                                <td>{{ $datas->position }}</td>
                                <td>{{ $datas->status}}</td>
                                <td>{{ $datas->description}}</td>

                                <td>
                                   
                                    <form method="POST" action="{{  route('post.destroy',$datas->id) }}">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{  route('post.show', $datas) }}" class=" btn btn-primary btn-sm" title="View Record" data-toggle="tooltip">View</a>
                                        <a href="{{  route('post.edit',$datas) }}" class=" btn btn-primary btn-sm" title="update Record" data-toggle="tooltip">Edit</a>
                                        
                                        
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                  
                                </td>

                                </tr>
                            @endforeach
                            </table>
                        
                        </div>
                        
                    </div>
                             {{ $data->links() }}
                </div>
            </div> 
    </main>


</body>
</html>