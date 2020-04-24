<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>New Author</title>

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
<h1 class="heading has-text-weight-bold is-size-4">Add a New Author</h1>

<form method="POST" action= "/authors/create">
    
    @csrf

    <div class="field">
        <label class="label" for="firstname">First Name</label>

        <div class="control">
            <input 
                class="input @error('firstname') is-danger @enderror" 
                type="text" 
                name="firstname"
                id="firstname"
                value="{{ old('firstname') }}">

            @error('firstname')
                <p class="help is-danger">{{ $errors->first('firstname') }}</p>
            @enderror

        </div>
    </div>
    <div class="field">
        <label class="label" for="lastname">Last Name</label>

    <div class="control">
        <input 
            class="input @error('lastname') is-danger @enderror" 
            type="text" 
            name="lastname"
            id="lastname"
            value="{{ old('lastname') }}">

        @error('lasstname')
            <p class="help is-danger">{{ $errors->first('lastname') }}</p>
        @enderror

    </div>
</div>
    
    <div class="field">
        <label class="label" for="bio">Bio</label>

        <div class="control">
            <textarea 
                class="textarea @error('bio') is-danger @enderror" 
                name="bio" 
                id="bio">
                {{ old('bio') }}
                </textarea>

            @error('bio')
                <p class="help is-danger">{{ $errors->first('bio') }}</p>
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
