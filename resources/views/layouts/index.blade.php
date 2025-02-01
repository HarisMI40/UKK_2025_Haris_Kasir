@php
    use Illuminate\Support\Facades\DB;
@endphp
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    {{-- @include('layouts_old.linkbootstrap') --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: #ecf0f1;
            display: flex;
            flex-direction: column;
            padding: 20px;

            .submenu-title {
                font-weight: 600;
                margin: 20px 0px;
            }


            .submenu {
                padding: 0;

                li {
                    a {
                        padding: 0;
                        padding-left: 10px;
                    }
                }
            }

            li {
                list-style: none;
            }




        }

        .sidebar h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .sidebar a {
            text-decoration: none;
            color: #ecf0f1;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 10px;
            display: block;
        }

        .sidebar a:hover {
            background-color: #34495e;
        }

        .content {
            flex-grow: 1;
            background-color: #ecf0f1;
            padding: 20px;
        }

        .content h1 {
            color: #2c3e50;
        }

        .content p {
            margin-top: 10px;
            line-height: 1.6;
        }

        .active {
            background: rgba(255, 255, 255, 0.2);
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>My Dashboard</h2>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add Project
        </button>
        <ul>
            <li>
                <h5 class="submenu-title">My Project</h5>
                <ul class="submenu">
                    <?php
                    $menuItems = DB::table('list')
                        ->select('id', 'nama')
                        // ->where('active', 1)
                        ->orderBy('created_at', 'asc')
                        ->get();
                    ?>

                    @foreach ($menuItems as $menuItem)
                        <li><a href={{ url("/$menuItem->id") }} class="">{{ $menuItem->nama }}</a></li>
                    @endforeach
                </ul>
            </li>
        </ul>
    </div>

    <div class="content">

        @yield('konten')

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ url('/list') }}" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Project</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="nama" class="form-label">Name</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </form>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
