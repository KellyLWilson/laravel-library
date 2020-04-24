<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Patrons</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        

            <div class="content">
                <div class="links">
                    <a href="/welcome">Home</a>
                    <a href="/books">Books</a>
                    <a href="/authors">Authors</a>
                    <a href="https://www.loc.gov/">Contact Us</a>
                    <a href="/patrons/create">**Add a New Patron**</a>
                    <a href="/patrons/create">**Remove a Patron-Coming Soon**</a>
                </div>
                <div class="title m-b-md">
                    Patrons
                </div> 
            
            <table>
                <tr>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Phone</th>
                </tr>
                <tr>
                    @foreach ($patrons as $patron) 

            <td>{{ $patron->firstname }}</td>
            <td>{{ $patron->lastname }}</td>
           <td>{{ $patron->email }}</td>
           <td>{{ $patron->phone }}</td>
        </tr>
            
           
            @endforeach 
                </tr>
              </table>  

            </div>
        </div>
    </body>
</html>
