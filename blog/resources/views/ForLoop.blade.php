<h1>For loop some example</h1>
    @for($i=0; $i<10; $i++)
        <button>Submit</button>
    @endfor
<br><br>
    @for($j=0; $j<10; $j++)
        <button>{{$i}}</button>
    @endfor
<br><br>
    @for($k=0; $k<10; $k++)
        <img style="width: 50px; height: 50px" src="https://cdn.pixabay.com/photo/2016/03/26/13/09/cup-of-coffee-1280537_960_720.jpg">
    @endfor
