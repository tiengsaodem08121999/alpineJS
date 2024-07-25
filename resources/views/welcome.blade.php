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


    {{-- <div x-data="{
            query: '',
            img:'',

            getImnage() {
                this.img = this.query;
            }

        }">
            <form x-on:submit.prevent="getImnage">
                <input type="text" x-model="query" >
                <button type="submit">Search</button>
            </form>
            
            <div x-show="img">
                <img x-bind:src="`{{ asset('image/${query}.png') }}`">
            </div>
         </div> --}}


    {{-- lesson 6 : more input --}}

    {{-- <div x-data="{ agreed: false}">
            <input type="checkbox" x-model="agreed"> 
            <span x-show="agreed">
                You have agreed</span>   
        </div> --}}

    {{-- <form 
            x-data="{
                users: [],
                deleteUser () {
                    console.log(this.users)
                }
            }" 
            x-on:submit.prevent="deleteUser">

            <input type="checkbox" x-model="users" value="1"> Alex
            <input type="checkbox" x-model="users" value="2"> Billy
            <input type="checkbox" x-model="users" value="3"> Mabel
            <button type="submit">Delete</button>
        </form> --}}

    {{-- <div x-data="{plan: 'Monthly'}">
            <select x-model="plan">
                <option value="Yearly">Yearly</option>
                <option value="Monthly">Monthly</option>
            </select>
            <span x-show="plan" x-text="`You've chosen the ${plan} `"></span>
        </div> --}}

    {{-- <div x-data="{plan : 'monthly'}">
            <input type="radio" x-model="plan" value="monthly">
            <input type="radio" x-model="plan" value="yearly">

            <span x-text="plan"></span>
        </div> --}}


    {{-- lesson 9 : Text and HTML --}}

    {{-- <div x-data="{hello: 'hello world'}">
                <h1 x-text="hello"></h1>
            </div> --}}

    {{-- <div x-data="{body: '<strong>Hello</strong>'}">
                <span x-html="body"></span>
            </div> --}}

    {{-- lesson 7 : attributes bindding --}}

    {{-- <div x-data="{selected:false}">
                <span x-bind:class="{'bold':selected}"> Am I bold ?</span>
                <button x-on:click="selected = !selected">Make it bold</button>
            </div> --}}
    {{-- <form x-data="{name: ''}" x-on:submit.prevent="alert(`hey ${name}`)">
                <input type="text" x-model="name">
                <button type="submit" x-bind:disabled="name=== ''"> let's go</button>
            </form> --}}

    {{-- <div x-data="progress:0">
            <progress max="100">
                <span x-text="`${progress}%`"></span>
                </progress>
                <button x-on:click="progress = progress + 5"> Increment</button>
            </div> --}}

    {{-- lesson 8 : attribute binding examples --}}

    {{-- <div 
            x-data="{
                selected: [],
                people: [
                    { id:1 , name: 'Alex'},
                    { id:2 , name: 'Billy'},
                    { id:3 , name: 'Mabel'},

                ]
            }">
                <template x-for="person in people">
                    <div>
                        <input type="checkbox" x-model="selected" 
                                               x-bind:value="person.id"
                                               x-bind:id="`person_${person.id}`"> 
                        <span x-text="person.name" x-bind:class="{'bold': selected.includes(person.id.toString())}"></span>
                    </div>
                </template>
            </div> --}}

        {{-- <div x-data="{ 
            progress: 0,
            increment () {
                this.progress++
            },

            init () {
                let interval = setInterval(() => {
                    if(this.progress >= 100)
                    {
                        clearInterval(interval)
                    }
                    this.increment()
                }, 100)
            }
        }">
            <div class="progress">
                <div class="progress_inner" x-bind:style="`width: ${progress}%;`">
                </div>
            </div>
            <button x-on:click="increment"> Increment</button>
        </div> --}}


        {{-- Learn 12: x-show vs x-if --}}
        {{-- <div x-data="{show: false}">
            <div x-show="show"> Am I visisble ?</div>
            <button x-on:click="show= true"> Show me</button>
        </div> --}}

        {{-- <div 
            x-data="{
                show: false,
                users: [
                    {id:1, name:'Alex', points: 10},
                    {id:2, name:'Billy', points:100},
                ],
                get userOrderByPoints () {
                    return this.users.sort((a,b) => b.points - a.points)
                }
            }"
        >
            <button x-on:click="show = true"> Show users</button>
            <div x-show="show">
                <template x-for="user in  users">
                    <div>
                        <span x-text="user.name"></span> <span x-text="user.points"></span>
                    </div>
                </template>
            </div>
        </div> --}}
</body>

</html>
