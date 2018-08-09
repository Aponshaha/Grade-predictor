<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/syle.css">

     <title>Testing</title>
</head>
<body>
    <div class="container">
        <section id="contact">
            <div class="section-content">
                <h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
                <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h3>
            </div>
            <div class="contact-section">
            <div class="container">
                <form action="/calc" method="post" >
                    {{ csrf_field() }}
                    <input placeholder="Current CGPA" value="" name="a" />
                    
                    <input placeholder="Credit COmpleted" value="" name="b" />
                    <br>
                    <br>
                    ADD COURSE
                    <br>
                    <br>
                    <input placeholder="Credit" value="" name="c1" />
                    <input placeholder="Expected Grade" value="" name="d" />
                    @if (isset($result))
                        <strong>= {{ $result }}</strong>
                    @endif
                    <button>Execute</button>
                </form>
            </div>
</section>
    </div>
</body>
</html>




<!------ Include the above in your HEAD tag ---------->

 
  


