<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Booking Form HTML Template</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <style>
        body {
            font-family: 'Raleway', sans-serif;
            background-color: #f8f9fa;
        }

        #booking {
            background: #343a40;
            color: white;
            padding: 50px 0;
        }

        .section-center {
            position: relative;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .booking-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        }

        .form-header h1 {
            font-size: 32px;
            margin-bottom: 30px;
            color: #343a40;
        }

        .form-group input,
        .form-group select {
            height: 45px;
            border-radius: 5px;
            border: 1px solid #ced4da;
            padding: 0 15px;
        }

        .form-control:focus {
            border-color: #495057;
            box-shadow: none;
        }

        .form-btn .submit-btn {
            background: #343a40;
            color: white;
            border: none;
            height: 45px;
            width: 100%;
            border-radius: 5px;
            font-size: 16px;
            text-transform: uppercase;
        }

        .form-btn .submit-btn:hover {
            background: #495057;
        }

        .form-label {
            position: absolute;
            top: -10px;
            left: 20px;
            background: white;
            padding: 0 5px;
            font-size: 12px;
            color: #495057;
        }

        .input-not-empty .form-label {
            color: #007bff;
        }
    </style>
</head>

<body>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-6 mx-auto">
                        <div class="booking-form">
                            <div class="form-header">
                                <h1>Make your reservation</h1>
                            </div>
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('booking.store') }}">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control" type="text" name="destination" placeholder="Country, ZIP, city..." value="{{ old('destination') }}" required>
                                    <span class="form-label">Destination</span>
                                    @error('destination')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="date" name="check_in" value="{{ old('check_in') }}" required>
                                            <span class="form-label">Check In</span>
                                            @error('check_in')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="date" name="check_out" value="{{ old('check_out') }}" required>
                                            <span class="form-label">Check out</span>
                                            @error('check_out')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select class="form-control" name="rooms" required>
                                                <option value="" selected hidden>no of rooms</option>
                                                <option value="1" {{ old('rooms') == 1 ? 'selected' : '' }}>1</option>
                                                <option value="2" {{ old('rooms') == 2 ? 'selected' : '' }}>2</option>
                                                <option value="3" {{ old('rooms') == 3 ? 'selected' : '' }}>3</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                            <span class="form-label">Rooms</span>
                                            @error('rooms')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select class="form-control" name="adults" required>
                                                <option value="" selected hidden>no of adults</option>
                                                <option value="1" {{ old('adults') == 1 ? 'selected' : '' }}>1</option>
                                                <option value="2" {{ old('adults') == 2 ? 'selected' : '' }}>2</option>
                                                <option value="3" {{ old('adults') == 3 ? 'selected' : '' }}>3</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                            <span class="form-label">Adults</span>
                                            @error('adults')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select class="form-control" name="children" required>
                                                <option value="" selected hidden>no of children</option>
                                                <option value="0" {{ old('children') == 0 ? 'selected' : '' }}>0</option>
                                                <option value="1" {{ old('children') == 1 ? 'selected' : '' }}>1</option>
                                                <option value="2" {{ old('children') == 2 ? 'selected' : '' }}>2</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                            <span class="form-label">Children</span>
                                            @error('children')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="email" name="email" placeholder="Enter your Email" value="{{ old('email') }}" required>
                                            <span class="form-label">Email</span>
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="tel" name="phone" placeholder="Enter your Phone" value="{{ old('phone') }}" required>
                                            <span class="form-label">Phone</span>
                                            @error('phone')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-btn">
                                    <button class="submit-btn">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.form-control').each(function() {
                floatedLabel($(this));
            });

            $('.form-control').on('input', function() {
                floatedLabel($(this));
            });

            function floatedLabel(input) {
                var $field = input.closest('.form-group');
                if (input.val()) {
                    $field.addClass('input-not-empty');
                } else {
                    $field.removeClass('input-not-empty');
                }
            }
        });
    </script>

@if(session('success'))
<script>
	alert("{{ session('success') }}");
</script>
@endif
</body>

</html>
