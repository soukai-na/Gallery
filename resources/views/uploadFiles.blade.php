<!DOCTYPE html>
<html>
    <head>
        <title>Upload files</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    </head>      
    <body>
        <div class="container">       
            <div class="panel panel-primary col-md-8">  
                <div class="panel-heading mt-5">
                    <h4>Upload files</h4>
                </div>
                <div class="panel-body">       
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{$message}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        @foreach(Session::get('images') as $image)
                            <img src="images/{{ $image['category'] }}" class="mb-3" width="250px">
                        @endforeach                   
                    @endif
            
                    <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf    
                        <div class="mb-3">
                            <label class="form-label" for="inputImage">Image:</label>
                            <input type="file" name="images[]" multiple class="form-control @error('images') is-invalid @enderror">
            
                            @error('images')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
            
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>        
                    </form>      
                </div>
            </div>
            <div class="">
                @foreach ($images as $image)
    <img src="{{ url('images/' . $image->category) }}"  class="mb-3" width="250px">
   @endforeach 
            </div>
        </div>
    </body>    
</html>