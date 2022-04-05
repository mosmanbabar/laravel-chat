<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Chat</title>
    <link rel="stylesheet" href="./css/app.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="app">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <header class="d-flex flex-column justify-content-center align-items-center">
                        <h1 >Lets Chat</h1>
                        <input type="text" name="username" id="username" placeholder="Enter a username"
                            class="form-control w-50 " />
                    </header>
                    <div id="messages"></div>
                    <div style="position:fixed; bottom: 5px; width: 50%" class="">
                    <form id="message_form" >
                        <div class="input-group mb-3">
                            <input type="text" name="message" id="message_input" class="form-control" placeholder="write a message .... " aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <button class="input-group-text btn btn-danger btn-sm" id="message_send" type="submit">Send</button>
                          </div>
                        {{-- <input type="text" name="message" class="form-control" id="message_input"
                            placeholder="write a message ....  " />
                        <button type="submit" id="message_send" class="btn btn-danger btn-sm">Send Message</button> --}}
                    </form>
                </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="/js/app.js"></script>
</body>

</html>
