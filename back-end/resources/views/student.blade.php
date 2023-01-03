<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="table-responsive">
        <table class="table table-striped-columns
        table-hover
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <caption>Student</caption>

                <tr>
                    <th>الاسم الاول</th>
                    <th>الاسم الاخير</th>
                    <th>الكلية</th>
                    <th>القسم</th>
                </tr>
            </thead>
                <tbody class="table-group-divider">
                    @foreach ($students as $student)
                    <tr class="table-primary" >
                        <td scope="row">{{$student->firstName}}</td>
                        <td scope="row">{{$student->lastName}}</td>
                        <td scope="row">{{$student->college}}</td>
                        <td scope="row">{{$student->section}}</td>

                    </tr>
                    @endforeach

                </tbody>
        </table>
    </div>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
