<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body class="p-4">
    <table class="table table-hover table-bordered table-responsive">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $user)
                <tr>
                    <td>
                        <span role="button" class="user-name text-decoration-underline">{{ $user['name'] ?? 'name' }}</span>
                    </td>
                    <td> {{ $user['age'] ?? 'age' }}</td>
                    <td> {{ $user['email'] ?? 'email' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $usuarios->links() }}

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="gap-2 d-flex modal-body flex-column">
                    <span id="modal-user-name"></span>
                    <span id="modal-user-age"></span>
                    <span id="modal-user-email"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Edit user</button>
                    <button type="button" class="btn btn-danger">Delete user</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const userNames = document.querySelectorAll('.user-name')
        const modal = new bootstrap.Modal('#exampleModal')
        const modalLabel = document.querySelector('#exampleModalLabel')
        const modalUserName = document.querySelector('#modal-user-name')
        const modalUserAge = document.querySelector('#modal-user-age')
        const modalUserEmail = document.querySelector('#modal-user-email')

        userNames.forEach(userName => {
            userName.addEventListener('click', (e) => {
                modalLabel.innerText = e.target.innerText
                modalUserName.innerText = e.target.innerText
                modalUserAge.innerText = e.target.parentElement.nextElementSibling.innerText
                modalUserEmail.innerText = e.target.parentElement.nextElementSibling.nextElementSibling.innerText
                modal.show()
            })
        })
    </script>
</body>

</html>
