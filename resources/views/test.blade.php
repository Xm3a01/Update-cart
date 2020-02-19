
    <!DOCTYPE html>
    <html lang="en">
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Document</title>
    </head>
    <body>
      @foreach ($items as $item)
      <ul>
          <li>
             Name :   {{$item->name}}
          </li>
          <li>
             Price : {{$item->price}} SDG
          </li>
          <li>
             <form style="padding:0%" action="{{route('cart.update' , $item->id)}}" method="post"> @csrf
               Quantity <span onclick="show()">{{$item->quantity}}</span>  <input id="in" style="width:30px" type="text" name="quantity" value="{{$item->quantity}}"> <button type="submit">Update</button>
            </form>    
          </li>
          <li>
            Total :   {{$item->price * $item->quantity}}
          </li>
          <li>
              Date :   {{$date ?? ''}}
          </li>
      
      </ul>
      @endforeach

      <script>
         document.getElementById('in').style('display','none');
         function show() {
          document.getElementById('in').style('display','block');
         }
       </script>
    </body>
    </html>
{{-- @endforeach
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   <div id="app">
      <cart :items={{$items}}></cart>
   </div>
   <a href="{{route('cart.delete')}}">Delete</a>
   
   <script src="{{asset('js/app.js')}}"></script>
</body>
</html> --}}

