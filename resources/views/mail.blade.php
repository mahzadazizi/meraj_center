
    @extends('layouts.master1')


    @section('title')
   mail 
     
    @endsection 
    
    @section('content')
    
    
        <!-- ======= Featured Section ======= -->
       
          <br><br><br><br>
            <div class="container">
           
              <h3>کاربر عزیز: {{$fullname}}</h3>
              <p>
                  {{$body}}
              </p>
              <p>
                  لینک پروفایل شما: <a href="#">www.meraj_center.com/{{$username}} </a>  می باشد
              </p>
              
              www.mysite.com
            </div>
            @endsection 
        