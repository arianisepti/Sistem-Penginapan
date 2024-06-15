<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit profile - SantriKoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">IMAGE</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                            
                                <!-- error message untuk image -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">NAME</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',$profile->name ) }}" placeholder="Masukkan  nama">
                            
                                <!-- error message untuk title -->
                                @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">EMAIL</label>
                                <input type ="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $profile->email) }}" placeholder="Masukkan email">
                            
                                <!-- error message untuk description -->
                                @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">GENDER</label>
                                        <input type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender', $profile->gender) }}" placeholder="Masukkan gender">
                                    
                                        <!-- error message untuk price -->
                                        @error('gender')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">BIRTH</label>
                                        <input type="date" class="form-control @error('birth') is-invalid @enderror" name="birth" value="{{ old('birth', $profile->birth) }}" placeholder="Masukkan birth">
                                    
                                        <!-- error message untuk stock -->
                                        @error('birth')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                
                                        <div class="form-group mb-3">
                                            <label class="font-weight-bold">ADDRESS</label>
                                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address', $profile->address) }}" placeholder="Masukkan address">
                                        
                                            <!-- error message untuk price -->
                                            @error('address')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="font-weight-bold">PHONE</label>
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone', $profile->phone) }}" placeholder="Masukkan phone">
                                        
                                            <!-- error message untuk price -->
                                            @error('phone')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                            </div>

                            <button type="submit" class="btn btn-md btn-primary me-3">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>
</body>
</html>