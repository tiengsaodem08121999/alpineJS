<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            margin: 0;
        }
        .modal-wrapper {
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, .5);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .modal {
            width: 100%;
            max-width: 30%;
            background-color: #fff;
            padding: 20px;
        }
    </style>
    @vite(['resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    {{-- <div class="modal-wrapper" 
            x-data="{open:true}"
            x-show="open"
            x-on:open-modal.window="open=true"
            x-on:keyup.escape.window="open = false"
    >
        <div class="modal" x-on:click="open = false">
            I am modal
        </div>
    </div>

    <button x-data x-on:click="$dispatch('open-modal')"> Trigger modal</button> --}}

    <div x-data="{message: ''}" x-on:message.window="message = $event.detail">
        <span x-text="message"></span>
    </div>

    <button x-data x-on:click="$dispatch('message', 'hello there')">Set message</button>
</body> 

</html>
