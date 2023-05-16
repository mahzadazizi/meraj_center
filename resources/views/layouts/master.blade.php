
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!doctype html>
    <html lang="en">

     @include(' layouts.head ') 

    <body id="section_1">

        @include(' layouts.header')    
        @include(' layouts.nav')     
        @yield('content')      
        @include(' layouts.footer') 
                <!-- JAVASCRIPT FILES -->
                <script src="js/jquery.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/jquery.sticky.js"></script>
                <script src="js/click-scroll.js"></script>
                <script src="js/counter.js"></script>
                <script src="js/custom.js"></script>
        
            
        </div>
    </body>
</html>






















