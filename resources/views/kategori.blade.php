<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<style>
    .service-details {
        background: var(--primary-white);
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    #textchange:hover {
        color: white;
    }
</style>

<body>
    <div style="padding-top: 100px;" class="service-details">
        <a href="/kategori/tambah"
            class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">>TambahKategori+</a>
        <table class="table table-sm mt-2">
            <thead>
                <tr style="text-align: center;">
                    <th>id</th>
                    <th>kategori</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($kategori as $row)
                    <tr>
                        <td align="center">{{$row->id}}</td>
                        <td align="center">{{$row->nama}}</td>
                        <td align="center">
                            <a href="/kategori/edit/{{ $row->id }}" style="width: fit-content;"><button
                                    class="btn">edit</button></a>
                        </td>
                        <td align="center">
                            <form action="{{ route("kategori.delete", [$row->id]) }}" method="post">
                                @csrf
                                @method("delete")
                                <button type="submit" class="btn btn-outline-info" id="textchange">hapus</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>

        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>