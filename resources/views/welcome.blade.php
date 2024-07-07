<!DOCTYPE html>
<html>

<head>
    <style>
        .bold {
            font-weight: bold
        }

        .progress {
            height: 10px;
            width: 300px;
            background-color: #ccc;
        }

        .progress_inner {
            height: 10px;
            background-color: slategray;
        }
    </style>
    @vite(['resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/marked@13.0.2/lib/marked.umd.min.js"></script>
</head>

<body>
    <div x-data="{
        body: '',
        marked: '',
    }">
        <div>
            <div>
                <textarea x-model="body"  cols="30" rows="4"></textarea>
            </div>
            <button >Preview</button>
        </div>
        Preview
    </div>        

</body>

</html>
