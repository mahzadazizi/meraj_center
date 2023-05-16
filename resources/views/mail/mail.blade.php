
    @extends('layouts.master')


    @section('title')
   mail 
     
    @endsection 
    
    @section('content')
    
    
        <!-- ======= Featured Section ======= -->
        <body dir="rtl">
    <main>

        <!DOCTYPE html>
        <html>

  <br><br><br><br>
    <div class="container">
   
      <h3>کاربر عزیز: {{$fullname}}</h3>
      <p>
          {{$body}}
      </p>
      <p>
          لینک پروفایل شما: <a href="#">www.mysite.com/{{$username}} </a>  می باشد
      </p>
      
      www.mysite.com
    </div>
    </main>
  </body>
  </html>
  @endsection 

