<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4 col-md-8">
        <div class="card">
            <div class="card-body">
                <ol>
                    @foreach ($datas as $key => $i)
                        <li class="mb-3">
                            <a href="{{ $i }}" target="blank" class="text-primary js-click{{ $key }}">{{ $i }}</a>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    total = "{{ count($datas) }}"
    for (let index = 0; index < total; index++) {
        $(document).ready(function() {
        $(".js-click"+[index]).click(function() {
            // $(".js-click").css('color', 'red !important');
            $(".js-click"+[index]).attr('style', 'color: red !important');
        });
    });
        
    }
</script>

</html>
