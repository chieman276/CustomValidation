<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>
    <h1>Danh sách khách hàng</h1>
    <table border="1">
        <thead>
            <tr>
                <td>STT</td>
                <td>Họ và tên</td>
                <td>Số điện thoại</td>
                <td>Email</td>
                <td>Thao tác</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Nguyễn Văn A</td>
                <td>01234567890</td>
                <td>email.test@mail.com</td>
                <td>
                    <!-- <a href="#">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a& -->
                    <a href="{{route('show')}}">Xem</a> | <a href="{{route('edit')}}">Sửa</a> |
                    <form action="{{route('delete')}}" method="post">
                        @csrf
                        @method('delete')


                    <button onclick="return confirm('Bạn có chắc muốn xóa không')">Xóa</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Nguyễn Văn B</td>
                <td>01234567890</td>
                <td>email.test@mail.com</td>
                <td>
                    <!-- <a href="#">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a -->
                    <a href="{{route('show')}}">Xem</a> | <a href="{{route('edit')}}">Sửa</a> |
                    <form action="{{route('delete')}}" method="post">
                        @csrf
                        @method('delete')


                    <button onclick="return confirm('Bạn có chắc muốn xóa không')">Xóa</button>
                    </form>
                  
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Nguyễn Văn C</td>
                <td>01234567890</td>
                <td>email.test@mail.com</td>
                <td>
                <a href="{{route('show')}}">Xem</a> | <a href="{{route('edit')}}">Sửa</a> |
                    <form action="{{route('delete')}}" method="post">
                        @csrf
                        @method('delete')


                    <button onclick="return confirm('Bạn có chắc muốn xóa không')">Xóa</button>
                    </form>
                  
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>