<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-3">Sửa học sinh</h1>
        <form method="post" action="{{route('students.update',$student->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Tên</label>
                <input type="text" name="name" class="form-control" placeholder="tên" value="{{ $student->name }}">
            </div>
            <div class="form-group">
                <label>Tuổi</label>
                <input type="number" class="form-control" placeholder="tuổi" name="age" value="{{ $student->age }}">
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <input type="text" class="form-control" placeholder="địa chỉ" name="address" value="{{ $student->address }}">
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <input type="number" class="form-control" placeholder="điện thoại" name="phone" value="{{ $student->phone }}">
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</body>

</html>