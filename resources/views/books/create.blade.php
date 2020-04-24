<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add a New Book</title>

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


<div id="wrapper">

    <div id="page" class="container">
<h1 class="heading has-text-weight-bold is-size-4">Add A New Book</h1>

<form method="POST" action= "/books/create">
    @csrf

    <div class="field">
        <label class="label" for="title">Title</label>

        <div class="control">
            <input 
                class="input @error('title') is-danger @enderror" 
                type="text" 
                name="title"
                id="title"
                value="{{ old('title') }}">

            @error('title')
                <p class="help is-danger">{{ $errors->first('title') }}</p>
            @enderror

        </div>
    </div>

    <div class="field">
        <label class="label" for="excerpt">Excerpt</label>

        <div class="field">
            <textarea
                class="textarea @error('excerpt') is-danger @enderror" 
                name="excerpt"
                id="excerpt"
                value="{{ old('excerpt') }}">
        </textarea>
            @error('excerpt')
                <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
            @enderror

        </div>
    </div>
    
    <div class="control">
        <label class="label" for="status">Status</label>

        <div class="control">
            <input
                class="input @error('status') is-danger @enderror" 
                name="status" 
                id="status">
                {{ old('status') }}

            @error('status')
                <p class="help is-danger">{{ $errors->first('status') }}</p>
            @enderror

        </div>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link" type="submit">Submit</button>
        </div>

    


</form>

    </div>
    </div>
    </body>
    </html>
