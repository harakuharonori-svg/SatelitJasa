<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        .bubble-chat {
            max-width: 70%;
            padding: 10px 15px;
            border-radius: 20px;
            position: relative;
            word-wrap: break-word
        }

        .sent {
            background-color: rgb(45, 122, 255);
            color: white;
            margin-left: auto;
        }

        .received {
            background-color: darkgrey;
            color: white;
            margin-right: auto;
        }

        .received::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: -10px;
            width: 0;
            height: 0;
            border-bottom: 10px solid #e5e5ea;
            border-right: 10px solid transparent;
            transform: translateY(-50%);
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="width: 100%;height:100dvh">
        <form style="width: 40%; box-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25); background-color: white" action=""
            class="border rounded-5" action="">
            <div class="pb-1 rounded-5" style="background-color: rgb(45, 122, 255)">
                <a href="/" class="btn mb-2"><svg xmlns="http://www.w3.org/2000/svg" fill="#ffffffff"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        style="width: 25px; stroke: rgb(255, 255, 255);">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg> <span style="color: white">Kembali</span>
                </a>
                <div class="text-center mb-5">
                    <img class="mb-3" src="agagugug" alt="ugugagag">
                    <h5 style="color: white">Name</h5>
                </div>
            </div>
            <div class="p-5">
                <div style="height:30dvh">
                    <p class="bubble-chat sent">agag ugug</p>
                    <p class="bubble-chat received">hadu</p>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <textarea name="" id="" style="width: 100%; border-radius: 25px;border-width: 1px;" rows="2">
                </textarea>
                    <button class="btn btn-primary">Send</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
        </script>
</body>

</html>