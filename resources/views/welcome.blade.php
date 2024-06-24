<!DOCTYPE html>
<html>
	<head>
		@vite(['resources/js/app.js'])
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	</head>
	<body>
        {{-- <div x-data="{records: [1, 2, 3, 4, 5]}">
            <div x-show="records.length"> Some Conetent</div>
        </div> --}}

        {{-- <div x-data="{number: 0}">
            <button x-on:click="number++"> Increnemt</button>
            <div x-text="number">
            </div>
            <div x-show=" number >= 10">
                that's is big number
            </div>
        </div> --}}


        {{-- lesson 4 --}}
        {{-- <form x-data="{ name: ''}" x-on:submit.prevent="console.log(name)">
            <input type="text" x-model="name">
            <button type="submit">Submit</button>
        </form>
        
        <div 
            x-data = "{
                name: '',
                makeNameUppercase (){
                    this.name= this.name.toUpperCase()
                }

            }"
        >
            <input type="text" x-model="name">
            <span x-text="name"></span>
            <button type="button" x-on:click="makeNameUppercase"> Uppercase</button>
        </div>
         --}}
    </body>
</html>