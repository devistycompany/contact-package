<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
   <form action="{{ route('contact.store') }}" method="post">
       @csrf
       <input type="text" name="name" placeholder="Your Name Please">
       <input type="email" name="email" placeholder="Your Valid Email">
       <textarea name="message" cols="30" rows="10" placeholder="Your Message">
       </textarea>

       <input type="submit" value="Send Message">

   </form>
</body>
</html>
