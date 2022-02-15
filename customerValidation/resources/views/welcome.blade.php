<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body class="antialiased">
    <div class="container">
        <div class="content">
            <div class="title m-b-md">
                Laravel Cusstom Validation
            </div>
            <br>

            <div class="form-custom-validation">
                <form action="{{ route('form.submit') }}" method="GET">

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên">
                        <div class="error-message">
                            @if ($errors->any())
                            <p style="color:red">{{ $errors->first('name') }}</p>
                            @endif
                        </div>

                    </div>

                    <div class="form-group">
                        <label>Age</label>
                        <input type="text" class="form-control" id="age" name="age" placeholder="Nhập tuổi">
                        <div class="error-message">
                            @if ($errors->any())
                            <p style="color:red">{{ $errors->first('age') }}</p>
                            @endif
                        </div>
                    </div>
                    <p style='color:green'>{{ (isset($success)) ? $success : '' }}</p>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>