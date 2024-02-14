      
      <!DOCTYPE html>
      <html lang="en">
         <head>
            <!-- basic -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- mobile metas -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="viewport" content="initial-scale=1, maximum-scale=1">
            <!-- site metas -->
            <title>A World</title>
            <meta name="keywords" content="">
            <meta name="description" content="">
            <meta name="author" content="">
            <!-- bootstrap css -->
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
            <!-- style css -->
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <!-- Responsive-->
            <link rel="stylesheet" href="css/responsive.css">
            <!-- fevicon -->
            <link rel="icon" href="images/fevicon.png" type="image/gif" />
            <!-- Scrollbar Custom CSS -->
            <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
            <!-- Tweaks for older IEs-->
            <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
            <!-- fonts -->
            <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
            <!-- owl stylesheets --> 
            <link rel="stylesheet" href="css/owl.carousel.min.css">
            <link rel="stylesheet" href="css/owl.theme.default.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
         </head>
         <body>
                <!-- header section start -->
                <div class="header_section">
                  @include('home.header')
                  <!-- banner section start -->
                  <!-- banner section end -->
               </div>
                     <!-- contact section start -->
      <div class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_taital">Request A Call Back</h1>
          <form action="{{route('usercontact.send')}}" method="POST" class="email_text">
            @csrf
             <div class="form-group">
                <input type="name" class="email-bt" placeholder="Name" name="name">
             </div>
             <div class="form-group">
                <input type="number" class="email-bt" placeholder="Phone Numbar" name="phonenumber">
             </div>
             <div class="form-group">
                <input type="email" class="email-bt" placeholder="Email" name="email">
             </div>
             <div class="form-group">
                <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="message"></textarea>
             </div>
             <button type="submit" class="send_btn">SEND</button>
            </form>
        </div>
      </div>
      <!-- contact section end -->
               <!-- footer section start -->
               @include('home.footersection')    
         </body>
      </html>